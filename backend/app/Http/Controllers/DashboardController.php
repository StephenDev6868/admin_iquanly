<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $data_month = $this->generateMonths();
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
        $data_dashboard_order_semi_product = DB::table('orders')
            ->join('semi_products', 'semi_products.order_id', '=', 'orders.id')
            ->select(
                'orders.id',
                'semi_products.product_id',
                DB::raw('SUM(semi_products.amount) as total_amount_product')
            )
            ->groupBy('orders.id', 'semi_products.product_id')
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
                        $value_res['amount'] = $value3['amount'];
                        $data_dashboard_order_res[] =  $value_res;
                    }
                }
            }

        }
        dd($data_dashboard_order_res);
        $data_dashboard_order_res = json_encode($data_dashboard_order_res, true);
        $date_work_query = $request->get('month_work');
        $firstMonth = $date_work_query ? Carbon::parse($date_work_query)->firstOfMonth() : Carbon::now()->firstOfMonth();
        $lastMonth = $date_work_query ? Carbon::parse($date_work_query)->lastOfMonth() : Carbon::now()->lastOfMonth();
        $quantity_data_res = WorkQuantity::query()
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->leftJoin('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->whereBetween('date_work', [$firstMonth, $lastMonth])
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
            ->limit(6)
            ->get()
            ->toArray();
        $quantity_data_res = json_encode($quantity_data_res, true);

        return view('admin.dashboard.index', compact('data_dashboard_order_res', 'quantity_data_res', 'data_month'));
    }

    public function dataDashboard()
    {

    }


}
