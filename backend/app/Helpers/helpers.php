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
