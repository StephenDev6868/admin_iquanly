<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * メイン機能と連携するアプリのサンプルです。
 *
 * @since 2013/10/10
 * @copyright Hamee Corp. All Rights Reserved.
 *
 */
use NextEngine\neApiClient;

// この値を「アプリを作る->API->テスト環境設定」の値に更新して下さい。
// (アプリを販売する場合は本番環境設定の値に更新して下さい)
// このサンプルでは、利用者情報とマスタ情報にアクセスするため、許可して下さい。
define('CLIENT_ID','uEaVxQAY1kSJ2z') ;
define('CLIENT_SECRET', 'rI6LXeDbP7A2p8ESzBdoV1qQJlW4kgfs3yGai5Oh') ;

class NextEngineController extends Controller
{
    public function createProductCsv(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $p = array() ;
        $p['data'] = file_get_contents($request->file('csv_file')) ;
        $p['data_type'] = 'csv' ;

        /* GZipでアップロードするにはこのコメントを外して下さい。通常はGZipでアップロードして下さい。
        $p['data'] = gzencode($p['data'], 9) ;
        $p['data_type'] = 'gz' ;
        */

        // 商品マスタCSV予約アップロードを実施
        $goods_upload = $client->apiExecute('/api_v1_master_goods/upload', $p) ;

        // アップロードの状況を確認
        $query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
        $query['que_id-eq'] = $goods_upload['que_id'] ?? '' ;
        $que = $client->apiExecute('/api_v1_system_que/search', $query) ;

        return response()->json(
            [
                '$goods_upload' => $goods_upload,
                '$que'          => $que,
            ],
            200,
        );
    }

    public function searchQues(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
        //$query['fields'] = '' ;
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        $que = $client->apiExecute('/api_v1_system_que/search', $query) ;
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function loginNE(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].'/'.$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $login = $client->neLogin() ;
        $login['state'] = $request->query('state') ?? '';
        return response()->json(
            [
                'data' => $login,
            ],
            200,
        );
    }

    public function storeOrder(Request $request)
    {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].'/'.$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $p = array() ;
        $p['receive_order_upload_pattern_id']= $request->receive_order_upload_pattern_id ?? '';
        $p['data_1'] = file_get_contents($request->file('csv_file')) ;
        $p['data_type_1'] = 'csv';

        $orders_upload = $client->apiExecute('/api_v1_receiveorder_base/upload', $p) ;

        // アップロードの状況を確認
        $query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
        $query['que_id-eq'] = $orders_upload['que_id'] ?? '' ;
        $que = $client->apiExecute('/api_v1_system_que/search', $query) ;

        return response()->json(
            [
                '$orders_upload' => $orders_upload,
                '$que'          => $que,
            ],
            200,
        );
    }

    public function searchOrder(Request $request)
    {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        //$query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
        $field_array = [
            'receive_order_shop_id',
            'receive_order_id',
            'receive_order_shop_cut_form_id',
            'receive_order_date',
            'receive_order_import_date',
            'receive_order_important_check_id',
            'receive_order_important_check_name',
            'receive_order_confirm_ids',
            'receive_order_gruoping_tag',
            'receive_order_delivery_id',
            'receive_order_delivery_name',
        ];
        $query['fields'] = implode(',', $field_array);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        $reciver_order = $client->apiExecute('/api_v1_receiveorder_base/search', $query) ;
        return response()->json(
            [
                '$reciver_order'  => $reciver_order,
            ],
            200,
        );
    }

    public function searchOrderPattern(Request $request)
    {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        //$query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
//        $field_array = [
//            'receive_order_shop_id',
//            'receive_order_id',
//            'receive_order_shop_cut_form_id',
//            'receive_order_date',
//            'receive_order_import_date',
//            'receive_order_important_check_id',
//            'receive_order_important_check_name',
//            'receive_order_confirm_ids',
//            'receive_order_gruoping_tag',
//            'receive_order_delivery_id',
//            'receive_order_delivery_name',
//        ];
//        $query['fields'] = implode(',', $field_array);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        $reciver_order = $client->apiExecute('/api_v1_receiveorder_uploadpattern/info') ;
        return response()->json(
            [
                '$reciver_order_pattern'  => $reciver_order,
            ],
            200,
        );
    }

    public function updateInventory(Request $request)
    {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].'/'.$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $p = array() ;
        $p['data'] = file_get_contents($request->file('csv_file')) ;
        $p['data_type'] = 'csv';

        $inventorys_upload = $client->apiExecute('/api_v1_warehouse_stock/upload', $p) ;

        // アップロードの状況を確認
        $query['fields'] = 'que_id, que_method_name, que_shop_id, que_upload_name, que_client_file_name, que_file_name, que_status_id, que_message, que_deleted_flag, que_creation_date, que_last_modified_date, que_creator_id, que_creator_name, que_last_modified_by_id, que_last_modified_by_name' ;
        $query['que_id-eq'] = $inventorys_upload['que_id'] ?? '' ;
        $que = $client->apiExecute('/api_v1_system_que/search', $query) ;

        return response()->json(
            [
                '$inventorys_upload' => $inventorys_upload,
                '$que'          => $que,
            ],
            200,
        );
    }

    public function searchProduct(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'goods_id',
            'goods_representation_id',
            'goods_name',
            'goods_foreign_name',
            'goods_type_id',
            'goods_type_name',
            'stock_quantity',
            'supplier_name',
            'goods_status_id',
            'goods_status_name',
            'goods_color',
            'goods_cost_price',
            'goods_display_price',
        ];
        $query['fields'] = implode(',', $query['fields']);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        if ($request->get('goods_id')) {
            $query['goods_id-eq'] = $request->get('goods_id') ?? '' ;
        }

        if ($request->get('goods_representation_id')) {
            $query['goods_representation_id-like'] = $request->get('goods_representation_id') ?? '' ;
        }
        $query['offset'] = $request->get('offset') ?? 1;
        $query['limit'] = $request->get('limit') ?? 10;
        $que = $client->apiExecute('/api_v1_master_goods/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function searchProductVariant(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'goods_page_goods_code',
            'goods_page_v_horizontal_name',
            'goods_page_v_horizontal_value',
            'goods_page_v_vertical_name',
            'goods_page_v_vertical_value',
            'goods_page_v_display_order',
            'goods_page_v_creation_date',
            'goods_page_v_creator_id',
            'goods_page_v_creator_name',
            'goods_page_v_last_modified_date',
            'goods_page_v_last_modified_by_id',
            'goods_page_v_last_modified_by_name',
        ];
        $query['fields'] = implode(',', $query['fields']);
        $query['goods_page_v_horizontal_name-neq'] = '';
        $query['goods_page_v_vertical_name-neq'] = '';
        $que = $client->apiExecute('/api_v1_master_goods_page_variation/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function searchProductPage(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'goods_page_goods_code',
            'goods_page_goods_name',
            'goods_page_display_flag',
            'goods_page_catch_phrase1',
            'goods_page_catch_phrase2',
            'goods_page_v_horizontal_category',
            'goods_page_v_vertical_category',
            'goods_page_stock_display_type',
            'goods_page_stock_display_threshold',
            'goods_page_order_type',
            'goods_page_order_amount',
        ];
        $query['fields'] = implode(',', $query['fields']);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        if ($request->get('goods_id')) {
            $query['goods_id-eq'] = $request->get('goods_id') ?? '' ;
        }

        if ($request->get('goods_representation_id')) {
            $query['goods_representation_id-like'] = $request->get('goods_representation_id') ?? '' ;
        }

        $que = $client->apiExecute('/api_v1_master_goods_page/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function searchProductPageVariant(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'goods_page_goods_code',
            'goods_page_v_horizontal_name',
            'goods_page_v_horizontal_value',
            'goods_page_v_vertical_name',
            'goods_page_v_vertical_value',
            'goods_page_v_display_order',
            'goods_page_v_creation_date',
            'goods_page_v_creator_id',
            'goods_page_v_creator_name',
        ];
        $query['fields'] = implode(',', $query['fields']);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        if ($request->get('goods_id')) {
            $query['goods_id-eq'] = $request->get('goods_id') ?? '' ;
        }

        if ($request->get('goods_representation_id')) {
            $query['goods_representation_id-like'] = $request->get('goods_representation_id') ?? '' ;
        }

        $que = $client->apiExecute('/api_v1_master_goods_page_variation/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function searchStock(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'stock_goods_id',
            'stock_quantity',
            'stock_allocation_quantity',
            'stock_defective_quantity',
            'stock_remaining_order_quantity',
            'stock_out_quantity',
            'stock_free_quantity',
            'stock_advance_order_quantity',
            'stock_advance_order_allocation_quantity',
            'stock_advance_order_free_quantity',
            'stock_deleted_flag',
            'stock_creation_date',
            'stock_last_modified_date',
            'stock_last_modified_null_safe_date',
            'stock_creator_id',
            'stock_creator_name',
        ];
        $query['fields'] = implode(',', $query['fields']);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        if ($request->get('goods_id')) {
            $query['goods_id-eq'] = $request->get('goods_id') ?? '' ;
        }

        if ($request->get('goods_representation_id')) {
            $query['goods_representation_id-like'] = $request->get('goods_representation_id') ?? '' ;
        }

        $que = $client->apiExecute('/api_v1_master_stock/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }

    public function searchWarehouse(Request $request) {
        $pathinfo = pathinfo(strtok($_SERVER['REQUEST_URI'],'?')) ;
        $redirect_uri = 'https://'.$_SERVER['HTTP_HOST'].$pathinfo['dirname'].$pathinfo['basename'] ;
        $client = new neApiClient(CLIENT_ID, CLIENT_SECRET, $redirect_uri) ;
        $query['fields'] = [
            'warehouse_stock_warehouse_id',
            'warehouse_stock_goods_id',
            'warehouse_stock_quantity',
            'warehouse_stock_allocation_quantity',
            'warehouse_stock_free_quantity',
            'warehouse_stock_creation_date',
            'warehouse_stock_last_modified_date',
            'warehouse_stock_last_modified_null_safe_date',
            'warehouse_stock_creator_id',
            'warehouse_stock_creator_name',
        ];
        $query['fields'] = implode(',', $query['fields']);
        //$query['que_id-eq'] = $request->get('que_id') ?? '' ;
        if ($request->get('goods_id')) {
            $query['goods_id-eq'] = $request->get('goods_id') ?? '' ;
        }

        if ($request->get('goods_representation_id')) {
            $query['goods_representation_id-like'] = $request->get('goods_representation_id') ?? '' ;
        }

        $que = $client->apiExecute('/api_v1_warehouse_stock/search', $query);
        return response()->json(
            [
                '$que'  => $que,
            ],
            200,
        );
    }
}
