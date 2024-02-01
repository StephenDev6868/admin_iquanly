<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\SemiProduct;
use App\Models\WorkQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function generateMonths()
    {
        $data_month = [];
        for ($i = 0 ; $i <= 3 ; $i++) {
            $data_month[] = Carbon::now()->subMonth($i)->format('Y-m');
        }
        return $data_month;
    }

    public function index(Request $request)
    {
        $order_id = $request->get('order_id') ?? null;
        $data_month = $this->generateMonths();
        $orders = Order::query()->select(['name', 'id'])->get()->toArray();
        //dd($request->get('month_work'));
        //        $data_dashboard_order_cut = DB::table('orders')
        //            ->join('process_cut_orders', 'orders.id', '=','process_cut_orders.order_id')
        //            ->where('status', true)
        //            ->select(
        //                'orders.id',
        //                DB::raw('SUM(CAST(process_cut_orders.total_product AS INTEGER)) as total_amount')
        //            )
        //            ->groupBy('orders.id')
        //            ->get();
        $query = DB::table('orders')
            ->join('semi_products', 'semi_products.order_id', '=', 'orders.id')
            ->select(
                'orders.id',
                'semi_products.product_id',
                DB::raw('SUM(semi_products.amount) as total_amount_product')
            );
        if ($order_id) {
            $query->where('semi_products.order_id', $order_id);
        }
        $data_dashboard_order_semi_product = $query->groupBy('orders.id', 'semi_products.product_id')
            ->get()
            ->toArray();

        //        $data_dashboard_order = Order::query()
        //            ->join('semi_products', 'semi_products.order_id', '=', 'orders.id')
        //            ->join('process_cut_orders', 'process_cut_orders.order_id', '=', 'orders.id')
        //
        //            ->get();
        $data_dashboard_order = DB::table('orders')->get()->toArray();
        $data_dashboard_order_res = [];
        foreach ($data_dashboard_order as $key => &$value){
            $new_value = (array) $value;
            $new_value['detail_product'] = (array) json_decode($new_value['detail_product'], true);
            $value_res = [];
            $value_res['order_id'] = $value->id;
            $value_res['order_name'] = $value->name;
            $value_res['order_date_done'] = \Illuminate\Support\Carbon::parse($value->end_at)->format('d-m-Y');
            if (count($data_dashboard_order_semi_product) > 0) {
                foreach ($data_dashboard_order_semi_product as $key2 => $value2) {
                    if ($value2->id == $value->id && $value2->id == $value->id) {
                        foreach ($new_value['detail_product'] as $key3 => &$value3) {
                            if ($value3['id'] == $value2->product_id) {
                                $value3['total_product_done'] = $value2->total_amount_product;
                                $value3['percent'] = round(($value3['total_product_done'] / $value3['amount']) * 100, 2);
                                $value_res['total_product_done'] = $value3['total_product_done'];
                                $value_res['percent'] = $value3['percent'];
                            } else {
                                $value3['total_product_done'] = 0;
                                $value3['percent'] = 0;
                                $value_res['total_product_done'] = 0;
                                $value_res['percent'] = 0;
                            }
                            $value_res['product_code'] = Product::getInfoProduct($value3['id'])->code;
                            $value_res['amount'] = $value3['amount'];
                            $data_dashboard_order_res[] =  $value_res;
                        }
                    }
                }
            } else {
                $value_res['total_product_done'] = 0;
                $value_res['amount'] = 0;
                $value_res['percent'] = 0;
                $data_dashboard_order_res[] =  $value_res;
            }
        }
        $data_dashboard_order_res = json_encode($data_dashboard_order_res, true);
        $date_work_query = $request->get('date_work');
        $hour = Carbon::now()->timezone(7)->hour;
        if ($hour < 19) {
            $date_work = Carbon::parse($date_work_query ?? '')->subDays(1);
        } else {
            $date_work = Carbon::parse($date_work_query ?? '');
        }

        $isSunday = Carbon::parse($date_work)->isSunday();

        if ($isSunday)  {
            $date_work = Carbon::parse($date_work ?? '')->subDays(1);
        }

        $isExistsData = WorkQuantity::query()
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->leftJoin('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->whereDate('date_work', $date_work)
            ->exists();

        if (!$isExistsData) {
            $date_work = Carbon::parse($date_work ?? '')->subDays(1);
        }

        $quantity_data_res = WorkQuantity::query()
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->leftJoin('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->whereDate('date_work', $date_work)
            ->select(
                'work_quantities.user_id',
                'users.full_name',
                'users.title_level',
                DB::raw('SUM((work_quantities.quantity) * (CAST(product_steps.unit_price as INT))) as total_user_salary'),
                DB::raw('SUM(work_quantities.quantity) as total_user_quantity')
            )
            ->groupBy(
                'work_quantities.user_id',
                'users.full_name',
                'users.title_level'
            )
            ->orderBy('total_user_quantity', 'desc')
            ->orderBy('total_user_salary', 'desc')
            ->limit(10)
            ->get()
            ->toArray();
        $quantity_data_res = json_encode($quantity_data_res, true);

        return view('admin.dashboard.index', compact('data_dashboard_order_res', 'quantity_data_res', 'data_month', 'orders', 'date_work'));
    }

    public function dataDashboard()
    {

    }


}
