<?php
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
        $lossConfig = $data['loss'] ?  1 + ($data['loss'] / 100) : 1 ;
        $ingredient = [];
        foreach ($detail_products as $key => $value) {
            $product = \App\Models\Product::find($value['id']);
            $ingredient_item = [];
            foreach ($product->materials as $key2 => $value2) {
                $material = \App\Models\Material::find($value2['id']);
                $ingredient_item[] = [
                    'name' => $material->name,
                    'code' => $material->code,
                    'quantity' => number_format((($value['amount']  * $value2['quota'] ) / $material->num_quota) * $lossConfig, '2', '.', ''),
                    'unit' => $material->unit,
                    'size' => $product->size,
                ];
            }
            $key = $value['amount'] . ' ' . $product->name . ' - ' . $product->code . ' (' . $product->size . ')';
            $ingredient[$key] = $ingredient_item;
        }
        return $ingredient;
    }
}
