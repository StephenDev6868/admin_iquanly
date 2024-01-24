<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\ConfigCutDiagram;
use App\Models\HistoryIoMaterial;
use App\Models\Material;
use App\Models\Order;
use App\Models\ProcessCutOrder;
use App\Models\Product;
use App\Models\SemiProduct;
use App\Models\User;
use App\Models\WMaterial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ConfigCutDiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configCutDiagrams = ConfigCutDiagram::query()->paginate(10);
        return view('admin.cut-configs.list', compact('configCutDiagrams'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function listProcess(Request $request)
    {
        $datas = ProcessCutOrder::query()->orderBy('id', 'desc')->paginate(6);
        $users = User::query()->where('board_id', 2)->get();
        return view('admin.process-cut-orders.index', compact('datas', 'users'));
    }

    public function updateProcessCutOrder(Request $request)
    {
        $idProcess = $request->get('id');
        $userId = $request->get('user_id');
        $note = $request->get('note');
        if (!$userId) {
            return response()->json(
                [
                    'status' => 'error',
                    'msg'    => 'Vui lòng chọn nhân viên cắt'
                ],
                400,
            );
        }
        $processCutOrder = ProcessCutOrder::query()->find($idProcess);
        $processCutOrder->user_id = $request->get('user_id') ?? '';
        $processCutOrder->note = $note ?? '';
        $processCutOrder->save();
        if ($processCutOrder) {
            return response()->json(
                [
                    'status' => 'success',
                    'msg'    => 'update success'
                ],
                200,
            );
        }

        return response()->json(
            [
                'status' => 'error',
                'msg'    => 'update fail'
            ],
            400,
        );
    }

    public function startProcess(Request $request)
    {
        try {
            DB::beginTransaction();
            $idProcess = $request->get('id');
            $userId = $request->get('user_id');
            $materialId = $request->get('material_id');
            $amount = $request->get('amount');
            if (!$userId) {
                return response()->json(
                    [
                        'status' => 'error',
                        'msg'    => 'Vui lòng chọn nhân viên cắt'
                    ],
                    400,
                );
            }
            $processCutOrder = ProcessCutOrder::query()->find($idProcess);
            $processCutOrder->start_at = Carbon::now()->format('Y-m-d h:i:s');
            $processCutOrder->user_id = $userId;

            //
            $wMaterial = WMaterial::query()->where('material_id', $materialId)->first();
            $quantity_use = (float) $wMaterial->quantity_contain - (float) $amount;
            if ($quantity_use < 0) {
                return response()->json(
                    [
                        'status' => 'error',
                        'msg'    => 'Lượng hàng trong kho không đủ'
                    ],
                    400,
                );
            }

            $quantity_contain = (float) $wMaterial->quantity_contain - (float) $amount;
            $wMaterial->quantity_use = $wMaterial->quantity_use + $amount;
            $wMaterial->quantity_contain = $quantity_contain;

            //
            HistoryIoMaterial::query()->create([
                'process_cut_order_id' => $idProcess,
                'creator_id' => $userId,
                'wmaterial_id' => $wMaterial->getKey(),
                'type' => 1,
                'amount' => $amount,
            ]);

            $wMaterial->save();
            $processCutOrder->save();
            DB::commit();
            if ($processCutOrder) {
                return response()->json(
                    [
                        'status' => 'success',
                        'msg'    => 'Start process success'
                    ],
                    200,
                );
            }
            return response()->json(
                [
                    'status' => 'error',
                    'msg'    => 'Start process fail'
                ],
                400,
            );
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(
                [
                    'status' => 'error',
                    'msg'    => 'Server 500'
                ],
                500,
            );
        }
    }

    public function finishProcess(Request $request)
    {
        $idProcess = $request->get('id');
        $userId = $request->get('user_id');
        $amount = $request->get('amount');
        $materialId = $request->get('material_id');
        $productId = $request->get('product_id');
        $orderId = $request->get('order_id');
        $processCutOrderId = $request->get('process_cut_order_id');
        if (!$userId) {
            return response()->json(
                [
                    'status' => 'error',
                    'msg'    => 'Vui lòng chọn nhân viên cắt'
                ],
                400,
            );
        }
        $processCutOrder = ProcessCutOrder::query()->find($idProcess);
        $processCutOrder->status = true;
        $processCutOrder->end_at = Carbon::now()->format('Y-m-d h:i:s');
        $processCutOrder->save();
        SemiProduct::query()->create([
            'amount' => $amount,
            'order_id' => $orderId,
            'product_id' => $productId,
            'material_id' => $materialId,
            'process_cut_order_id' => $processCutOrderId,
        ]);
        if ($processCutOrder) {
            return response()->json(
                [
                    'status' => 'success',
                    'msg'    => 'Finish process success'
                ],
                200,
            );
        }
        return response()->json(
            [
                'status' => 'error',
                'msg'    => 'Finish process fail'
            ],
            400,
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all()->toArray();
        foreach ($orders as &$order) {
            foreach ($order['detail_product'] as &$product) {
                $productInfo = Product::query()->where('id', $product['id'])->first();
                $product['name'] = $productInfo->name;
                $product['code'] = $productInfo->code;
                $product['size'] = $productInfo->size;
                $product['part_number'] = $productInfo->part_number;
            }
        }
        //dd($orders);
        $sizes = [
            '3XL',
            '2XL',
            'XL',
            'M',
            'S',
        ];
        $materials = Material::all();
        return view('admin.cut-configs.add', compact('orders', 'sizes', 'materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function process(Request $request)
    {
        $inputs = $request->all();
        $order_product = explode('_', $inputs['order_product'] ?? []) ;
        $inputs['order_id'] = $order_product[0] ?? '';
        $inputs['product_id'] = $order_product[1] ?? '';

        $orderProductInfo = Order::query()
            ->where('id', $inputs['order_id'])
            ->first();

        $productInfo = Product::query()
            ->select('id', 'materials')
            ->where('id', $inputs['product_id'])
            ->first();

        $productInfoIds = array_map(function ($item) {
            return (int) $item['id'];
        }, $productInfo->materials);

        $material = Material::query()
            ->whereIn('id', $productInfoIds)
            ->where('name', 'like', '%' . 'VẢI ' . '%')
            ->first();

        $w_material = WMaterial::query()
            ->where('material_id', $material->getKey())
            ->first();
        $w_material_contain = $w_material->quantity_contain ?? 0;

        $num_quota_material = (int) $material->num_quota ?? 1;

        $inputs['long'] = str_replace(',', '.', $inputs['long']);
        $amount = array_filter($orderProductInfo->detail_product, function ($item) use ($inputs) {
             if ($item['id'] == $inputs['product_id']) {
                 return $item;
             }
        });
        $key = array_keys($amount)[0] ?? '0';
        $amount = (int) Arr::get($amount, $key .'.amount');
        $nameOrder = $orderProductInfo->name;
        $totalLayer = ceil($amount / (int) $inputs['quantity']);
        $totalNguyenSd = (int) floor($totalLayer / (int) $inputs['layer']);
        $totalLeSd = (int) floor($totalLayer % (int) $inputs['layer']);
        $totalKg = ((float) $inputs['long'] * (int) $inputs['layer']) / $num_quota_material;
        $totalKgLe = $totalKg / ($totalLayer / $totalLeSd);
        if ($w_material_contain == 0) {
            return response()->json(
                [
                    'status' => 'error',
                    'msg' => 'lượng vải trong kho đã hết',
                ],
                400
            );
        } else if ($w_material_contain < ($totalKg + $totalKgLe)) {

        }
        $data[] = [
            'totalNguyenSd' => $totalNguyenSd,
            'totalLayer'    => $totalLayer,
            'totalKg'      => $totalKg,
            'name_order'    => $nameOrder,
            'material_id'   => $material->getKey(),
            'material_code'   => $material->code,
        ];
        if ($totalLeSd > 0) {
            $data[] = [
                'totalNguyenSd' => 1,
                'totalLayer'    => $totalLeSd,
                'totalKg'      => round($totalKgLe, 3),
                'name_order'    => $nameOrder,
                'material_id'   => $material->getKey(),
                'material_code'   => $material->code,
            ];
        }
        return response()->json(
            $data,
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        $inputs['long'] = str_replace(',', '.', $inputs['long']);
        $order_product = explode('_', $inputs['order_product'] ?? []) ;
        $inputs['order_id'] = $order_product[0] ?? '';
        $inputs['product_id'] = $order_product[1] ?? '';
        unset($inputs['order_product']);

        $validator = Validator::make($inputs, [
            'name' => 'Required|max:255',
            'code' => 'Required|max:255',
            'order_id' => 'Required|numeric',
            'product_id' => 'Required|numeric',
            'quantity' => 'Required|numeric',
            'layer' => 'Required|numeric',
            'long' => 'Required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $inputs['detail_config'] = [
            [
                'name-1' => $inputs['name-1'],
                'layer-1' => $inputs['layer-1'],
                'sd-1' => $inputs['sd-1'],
                'kg-1' => $inputs['kg-1'],
                'material-1' => $inputs['material-1'],
            ],
            [
                'name-2' => $inputs['name-2'],
                'layer-2' => $inputs['layer-2'],
                'sd-2' => $inputs['sd-2'],
                'kg-2' => $inputs['kg-2'],
                'material-2' => $inputs['material-2'],
            ],
        ];

        $result = ConfigCutDiagram::query()->create($inputs);
        $this->createDataProcessCutWorker($inputs, $result->getKey());
        if ($result) {
            return Redirect::route('admin.cut_configs.list')
                ->with('success', 'Tạo sơ đồ cắt thành công');
        }

        return Redirect::route('admin.cut_configs.list')
            ->with('error', 'Tạo sơ đồ cắt thất bại');
    }

    protected function createDataProcessCutWorker(array $inputs, $diagram_id)
    {
        $round_sd_1 = Arr::get($inputs['detail_config'], '0');
        $round_sd_2 = Arr::get($inputs['detail_config'], '1');
        $data_needed_add = [];
        for ($i = 1; $i <= (int) $round_sd_1['sd-1']; $i++) {
            $data_needed_add[] = [
                'config_cut_diagram_id' => $diagram_id,
                'order_id' => $inputs['order_id'],
                'product_id' => $inputs['product_id'],
                'material_id' => $inputs['material-1'],
                'user_id' => null,
                'total_product' => (int) $inputs['quantity'] * (int) $inputs['layer'],
                'total_material' => round((float) $round_sd_1['kg-1'], 2),
                'created_at'   => now(),
                'updated_at'   => now()
            ];
        }
        for ($i = 1; $i <= (int) $round_sd_2['sd-2']; $i++) {
            $data_needed_add[] = [
                'config_cut_diagram_id' => $diagram_id,
                'order_id' => $inputs['order_id'],
                'product_id' => $inputs['product_id'],
                'material_id' => $inputs['material-2'] ?? '',
                'user_id' => null,
                'total_product' => (int) $round_sd_2['layer-2'] * (int) $inputs['quantity'],
                'total_material' => $round_sd_2['kg-2'],
                'created_at'   => now(),
                'updated_at'   => now()
            ];
        }
        DB::table('process_cut_orders')->insert($data_needed_add);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfigCutDiagram  $configCutDiagram
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(ConfigCutDiagram $configCutDiagram)
    {
        $orders = Order::all()->toArray();
        foreach ($orders as &$order) {
            foreach ($order['detail_product'] as &$product) {
                $productInfo = Product::query()->where('id', $product['id'])->first();
                $product['name'] = $productInfo->name;
                $product['code'] = $productInfo->code;
                $product['size'] = $productInfo->size;
                $product['part_number'] = $productInfo->part_number;
            }
        }
        //dd($orders);
        $sizes = [
            '3XL',
            '2XL',
            'XL',
            'M',
            'S',
        ];
        $materials = Material::all();
        return view('admin.cut-configs.edit', compact('configCutDiagram', 'orders', 'sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfigCutDiagram  $configCutDiagram
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfigCutDiagram $configCutDiagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConfigCutDiagram  $configCutDiagram
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ConfigCutDiagram $configCutDiagram, Request $request)
    {
        $inputs = $request->input();
        $order_product = explode('_', $inputs['order_product'] ?? []) ;
        $inputs['order_id'] = $order_product[0] ?? '';
        $inputs['product_id'] = $order_product[1] ?? '';
        unset($inputs['order_product']);

        $validator = Validator::make($inputs, [
            'name' => 'Required|max:255',
            'code' => 'Required|max:255',
            'order_id' => 'Required|numeric',
            'product_id' => 'Required|numeric',
            'quantity' => 'Required|numeric',
            'layer' => 'Required|numeric',
            'long' => 'Required|numeric',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = $configCutDiagram->update($inputs);
        if ($result) {
            return Redirect::route('admin.cut_configs.list')
                ->with('success', 'Cập nhập sơ đồ thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfigCutDiagram  $configCutDiagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfigCutDiagram $configCutDiagram)
    {
        //
    }
}
