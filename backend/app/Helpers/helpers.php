<?php

use App\Enums\Screen;
use App\Models\Config;

if (! function_exists('get_template')) {
    /**
     *
     * @param integer $config
     *
     * @return Config|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    function get_template(int $config)
    {
        return Config::query()->find($config);
    }
}

if (! function_exists('get_product_info_text')) {
    /**
     *
     * @param integer $config
     *
     * @return string
     */
    function get_product_info_text($id)
    {
        $product = \App\Models\Product::find($id);

        return $product->name . ' - ' . $product->code  . ' (' . $product->size . ')';
    }
}

if (! function_exists('get_list_role')) {
    /**
     *
     * @param integer $config
     *
     * @return string
     */
    function get_list_role($id)
    {

    }
}

if (! function_exists('count_material_for_order')) {
    /**
     *
     * @param integer $config
     *
     * @return Config|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    function count_material_for_order(array $data)
    {
        $detail_products = $data['detail_product'];
        $lossConfig = $data['loss'] && is_numeric($data['loss']) ?  1 + ($data['loss'] / 100) : 1 ;
        $ingredient = [];
        $test = [];
        $test1 = [];
        $test2 = [];
        foreach ($detail_products as $key => $value) {
            $product = \App\Models\Product::find($value['id']);
            $ingredient_item = [];
            if (is_array($product->materials)) {
                foreach ($product->materials as $key2 => $value2) {
                    $material = \App\Models\Material::find($value2['id']);
                    $test[] = $material;
                    $test1[] = $value;
                    $test2[] = $value2;
                    $ingredient_item[] = [
                        'name' => $material->name,
                        'code' => $material->code,
                        //'quantity' => number_format((($value['amount']  * $value2['quota'] ) / $material->num_quota) * $lossConfig, '2', '.', ''),
                        'unit' => $material->unit,
                        'size' => $product->size,
                    ];
                    if ($data['id'] == '3') {
                        dd($data['id'], $value['amount'], $value2['quota'], $material->num_quota, $lossConfig,
                            number_format((($value['amount']  * $value2['quota'] ) / $material->num_quota) * $lossConfig, '2', '.', '')
                        );
                    }
                }
            }
            if ($data['id'] == '3') {
                dd($test1, $test2, $test, $lossConfig);
            }
            $key = $value['amount'] . ' - ' . $product->name . ' - ' . $product->code . ' (' . $product->size . ') -' . ' (' . $product->part_number . ')';
            $ingredient[$key] = $ingredient_item;
        }
        return $ingredient;
    }
}

if (! function_exists('render_sidebar_by_role')) {
    /**
     *
     * @param integer $config
     *
     * @return Config|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    function render_sidebar_by_role()
    {
        $screens = Screen::LIST_URL;
        $screensShow = [];

        foreach ($screens as $key => $screen) {
            if ( in_array($key, [
                Screen::COMPANY,
                Screen::BOARD,
                Screen::ROLE,
                Screen::SETTING_GENERAL,
            ])) {
                $screensShow['setting_general']['has_sub_menu'] = true;
                $screensShow['setting_general'][$key] = $screen;
            }

            elseif (in_array($key, [
                Screen::SALARY_PRODUCT,
                Screen::SALARY_BASIC,
            ])) {
                $screensShow['salary']['has_sub_menu'] = true;
                $screensShow['salary'][$key] = $screen;
            } elseif (in_array($key, [
                Screen::PRODUCT_CONFIG,
                Screen::PRODUCT_STEP,
            ])) {
                $screensShow['product']['has_sub_menu'] = true;
                $screensShow['product'][$key] = $screen;
            } elseif (in_array($key, [
                Screen::WAREHOUSEDEVICE,
                //Screen::WAREHOUSEHAFTPRODUCT,
                Screen::WAREHOUSETOOL,
                Screen::WAREHOUSEMATERIAL,
            ])) {
                $screensShow['warehouse']['has_sub_menu'] = true;
                $screensShow['warehouse'][$key] = $screen;
            } elseif (in_array($key, [
                Screen::CUSTOMER,
                Screen::PARTNER,
                Screen::SUPPLIER,
            ])) {
                $screensShow['cps']['has_sub_menu'] = true;
                $screensShow['cps'][$key] = $screen;
            } else {
                $screensShow[$key]['has_sub_menu'] = false;
                $screensShow[$key][] = $screen;
            }

        };
        dd($screensShow);
    }
}
