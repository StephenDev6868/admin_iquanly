<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductStep;
use App\Models\User;
use App\Models\WorkQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $key_word = $request->get('key_word');
        $product_id = $request->get('product_id');

        $products = Product::all();
        $query = ProductStep::query();

        if (!empty($key_word)) {
            $query->where(function ($query) use ($key_word) {
                $query->where('name', 'like', '%' . $key_word . '%');
            });
        }

        if (!empty($product_id)) {
            $query->where('product_id', $product_id);
        }

        $productSteps = $query->paginate(10);
        return view('admin.product-steps.list', compact('productSteps', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $products = Product::all();
        $users = User::query()->whereIn('board_id', [1,2,4])->get();
        return view('admin.product-steps.add', compact('products', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'name' => 'required',
            'product_id' => 'required',
            'coefficient' => 'required',
            'unit_price' => 'required',
            // 'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = ProductStep::query()->create($inputs);
        $userIds = $inputs['user_ids'] ?? [];
        $dataWorkQuantity = [];
        foreach ($userIds as $key => $userId) {
            $dataWorkQuantity[] = [
                'user_id'    => $userId,
                'product_id' => $inputs['product_id'],
                'product_step_id' => $result['id'],
                'quantity'   => 0,
                'date_work'  => now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        if (count($dataWorkQuantity) > 0) {
            WorkQuantity::query()->insert($dataWorkQuantity);
        }

        if ($result) {
            return Redirect::route('admin.productSteps.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductStep  $productStep
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(ProductStep $productStep)
    {
        $products = Product::all();
        $users = User::query()->whereIn('board_id', [1,2,4])->get();
        return view('admin.product-steps.edit', compact('productStep', 'products', 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductStep  $productStep
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function showGenerateWorkQuantity(ProductStep $productStep)
    {
        $products = Product::all();
        $users = User::query()->whereIn('board_id', [1,2,4])->get();
        return view('admin.product-steps.add-work-quantity', compact('productStep', 'products', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ProductStep  $productStep
     * @return string
     */

    public function doGenerateWorkQuantity(Request $request, ProductStep $productStep)
    {
        $inputs = $request->all();
        $dateWork = Carbon::parse($inputs['date_work'])->format('Y-m-d');
        $userIds = $inputs['user_ids'];

        // ✅ Lấy các user_id đã có dữ liệu cho product_step + ngày
        $existingUserIds = WorkQuantity::query()
            ->where('product_step_id', $productStep->getKey())
            ->where('date_work', $dateWork)
            ->whereIn('user_id', $userIds)
            ->pluck('user_id')
            ->toArray();

        // ✅ Lọc ra các user_id chưa tồn tại
        $newUserIds = array_diff($userIds, $existingUserIds);

        if (empty($newUserIds)) {
            return Redirect::back()->with('info', 'Dữ liệu đã tồn tại, không cần tạo thêm.');
        }

        // ✅ Build 1 lần dữ liệu cần insert
        $now = now();
        $dataWorkQuantity = array_map(function ($userId) use ($inputs, $productStep, $dateWork, $now) {
            return [
                'user_id'         => $userId,
                'user_input_id'   => auth()->user()->id,
                'product_id'      => $inputs['product_id'],
                'product_step_id' => $productStep->getKey(),
                'quantity'        => 0,
                'date_work'       => $dateWork,
                'created_at'      => $now,
                'updated_at'      => $now,
            ];
        }, $newUserIds);

        // ✅ Insert 1 lần duy nhất
        WorkQuantity::insert($dataWorkQuantity);

        return Redirect::route('admin.productSteps.showQuantity', [
            'productStep' => $productStep->getKey(),
            'date_work'   => $dateWork,
            'user_ids'    => $userIds,
        ])->with('success', 'Tạo dữ liệu sản lượng thành công');
    }

//    public function doGenerateWorkQuantity(Request $request, ProductStep $productStep)
//    {
//        $inputs = $request->all();
//        $inputs['date_work'] =  Carbon::parse($inputs['date_work'])->format('Y-m-d');
//        $dataWorkQuantity = [];
//        $userIds = $inputs['user_ids'];
//        foreach ($userIds as $key => $userId) {
//            $isExist = WorkQuantity::query()->where([
//                'user_id' => $userId,
//                'product_step_id' => $productStep->getKey(),
//                'date_work' => $inputs['date_work'] ?? now()->format('Y-m-d')
//            ])->exists();
//            if (!$isExist) {
//                $dataWorkQuantity[] = [
//                    'user_id'    => $userId,
//                    'product_id' => $inputs['product_id'],
//                    'product_step_id' => $productStep->getKey(),
//                    'quantity'   => 0,
//                    'date_work'  => $inputs['date_work'] ?? now()->format('Y-m-d'),
//                    'created_at' => now(),
//                    'updated_at' => now(),
//                ];
//            }
//        }
//        $result2 = WorkQuantity::query()->insert($dataWorkQuantity);
//
//        if ($result2) {
//            return Redirect::route('admin.productSteps.showQuantity', ['productStep' => $productStep->getKey(), 'date_work' => $inputs['date_work'],'user_ids' => $inputs['user_ids']])
//                ->with('success', 'Tạo dữ liệu sản lượng thành công');
//        }
//    }

    public function showQuantity(Request $request)
    {
        $input = $request->query();
        $product_id = $input['product_id'] ?? null;
        $date_work = $input['date_work'] ?? null;
        $date_work_from = $input['date_work_from'] ?? null;
        $date_work_to = $input['date_work_to'] ?? null;
        $step = $input['productStep'] ?? null;
        $user_ids = $input['user_ids'] ?? [];

        $products = Cache::remember('products_lookup', 36000, function () {
            return Product::select('id', 'name')->get();
        });

        $productSteps = Cache::remember('product_steps_lookup', 36000, function () {
            return ProductStep::select('id', 'name')->get();
        });

        $users = User::select('id', 'full_name')
            ->whereIn('board_id', [1, 2, 4])
            ->orderBy('full_name')
            ->get();

        $query = WorkQuantity::query()
            ->select([
                'products.id as productId',
                'products.name as productName',
                'products.code as productCode',
                'product_steps.id as productStepId',
                'product_steps.name as productStepName',
                'product_steps.coefficient as coefficient',
                'product_steps.unit_price as unitPrice',
                'users.id as userId',
                'users.full_name as userFullName',
                'work_quantities.id as workQuantityId',
                'work_quantities.quantity as quantity',
                'work_quantities.date_work as date_work',
            ])
            ->join('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->join('products', 'products.id', '=', 'product_steps.product_id')
            ->join('users', 'users.id', '=', 'work_quantities.user_id');

        if ($date_work) {
            $date_work = \Carbon\Carbon::parse($date_work)->format('Y-m-d');
            $query->where('work_quantities.date_work', $date_work);
        } elseif ($date_work_from && $date_work_to) {
            $date_work_from = \Carbon\Carbon::parse($date_work_from)->format('Y-m-d');
            $date_work_to = \Carbon\Carbon::parse($date_work_to)->format('Y-m-d');
            $query->whereBetween('work_quantities.date_work', [$date_work_from, $date_work_to]);
        } else {
            $query->where('work_quantities.date_work', '>=', \Carbon\Carbon::now()->subDays(30)->format('Y-m-d'));
        }

        if (!empty($user_ids) && is_array($user_ids)) {
            $query->whereIn('work_quantities.user_id', $user_ids);
        }
        if ($product_id) {
            $query->where('products.id', $product_id);
        }

        if ($step) {
            $query->where('work_quantities.product_step_id', $step);
        }

        $query->orderBy('work_quantities.date_work', 'desc')
            ->orderBy('work_quantities.id', 'desc'); // Secondary sort cho consistency

        $hasSpecificFilters = (!empty($user_ids) && is_array($user_ids)) ||
            ($date_work_from && $date_work_to) ||
            $date_work;

        $isShowPagination = !$hasSpecificFilters;

        if ($hasSpecificFilters) {
            $data = $query->limit(1000)->get();

            if ($data->count() >= 1000) {
                session()->flash('warning', 'Kết quả quá nhiều (>1000 records). Vui lòng thu hẹp điều kiện lọc.');
            }
        } else {
            // Pagination với số lượng hợp lý
            $data = $query->paginate(20, ['*'], 'page', $request->get('page', 1));
        }

        return view('admin.product-steps.quantity', compact(
            'data',
            'step',
            'users',
            'products',
            'productSteps',
            'isShowPagination'
        ));
    }

// Thêm method helper để optimize cache (Laravel 8)
    private function getCachedLookupData($key, $model, $columns, $ttl = 3600)
    {
        return Cache::remember($key, $ttl, function () use ($model, $columns) {
            return $model::select($columns)->get();
        });
    }

    public function getStepProductById(Request $request)
    {
        $product_id = $request->get('product_id');
        $datas = ProductStep::query();
        if ($product_id) {
            $datas->where('product_id', $product_id);
        }
        $datas= $datas->get()->toArray();

        return response()->json(
            $datas,
            200
        );
    }

    function bulkUpdateWorkQuantities(array $inputs)
    {
        unset($inputs['_token']);

        if (empty($inputs)) return;

        $query = "UPDATE work_quantities SET ";

        $query .= "quantity = CASE id ";
        foreach ($inputs as $id => $input) {
            $quantity = (int) ($input[0] ?? 0);
            $query .= "WHEN " . (int)$id . " THEN " . $quantity . " ";
        }
        $query .= "END, ";

        $query .= "date_work = CASE id ";
        foreach ($inputs as $id => $input) {
            try {
                $date = Carbon::parse($input[1])->format('Y-m-d');
            } catch (\Exception $e) {
                $date = now()->format('Y-m-d');
            }

            // Escape ngày với dấu nháy đơn và ép kiểu timestamp
            $query .= "WHEN " . (int)$id . " THEN '" . addslashes($date) . "'::timestamp ";
        }
        $query .= "END, ";

        $now = now()->format('Y-m-d H:i:s');
        $query .= "updated_at = '" . addslashes($now) . "' ";

        $ids = array_map('intval', array_keys($inputs));
        $query .= "WHERE id IN (" . implode(',', $ids) . ")";
        return $query;
    }



    public function updateQuantity(Request $request)
    {
        try {
            $inputs = $request->all();
            $query = $this->bulkUpdateWorkQuantities($inputs);
            DB::transaction(function () use ($query) {
                DB::statement($query);
            });
            DB::commit();
            return Redirect::back()
                ->withInput()
                ->with('success', 'Cập nhập dữ liệu thành công');
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ProductStep  $productStep
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,ProductStep $productStep)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'name' => 'required',
            'product_id' => 'required',
            'coefficient' => 'required',
            'unit_price' => 'required',
            //'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $productStep->update($inputs);

        if ($result) {
            return Redirect::route('admin.productSteps.list')
                ->with('success', 'Tạo công đoạn sản phẩm thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param  int  $quantityId
     */
    public function destroyOneQuantity(WorkQuantity $quantityId)
    {
        $quantityId->delete();
        session()->flash('success', 'Xóa dữ liệu thành công');
        return response()->json([
            'success' => true,
            'message' => 'Xóa thành công',
            'reload' => true
        ]);
    }
}
