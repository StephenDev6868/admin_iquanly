<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/api_upload_csv', [\App\Http\Controllers\NextEngineController::class, 'createProductCsv']);
Route::get('/login_only_ne', [\App\Http\Controllers\NextEngineController::class, 'loginNE']);
Route::get('/search-que', [\App\Http\Controllers\NextEngineController::class, 'searchQues']);
Route::post('/upload_order_csv', [\App\Http\Controllers\NextEngineController::class, 'storeOrder']);
Route::post('/upload_inventory_csv', [\App\Http\Controllers\NextEngineController::class, 'updateInventory']);
Route::get('/search_order', [\App\Http\Controllers\NextEngineController::class, 'searchOrder']);
Route::get('/search_order_pattern', [\App\Http\Controllers\NextEngineController::class, 'searchOrderPattern']);

Route::get('/search-product', [\App\Http\Controllers\NextEngineController::class, 'searchProduct']);
Route::get('/search-product-option', [\App\Http\Controllers\NextEngineController::class, 'searchProductOption']);
Route::get('/search-product-variant', [\App\Http\Controllers\NextEngineController::class, 'searchProductVariant']);

Route::get('/search-product-page', [\App\Http\Controllers\NextEngineController::class, 'searchProductPage']);
Route::get('/search-product-page-variant', [\App\Http\Controllers\NextEngineController::class, 'searchProductPageVariant']);

Route::get('/search-stock', [\App\Http\Controllers\NextEngineController::class, 'searchStock']);
Route::get('/search-warehouse', [\App\Http\Controllers\NextEngineController::class, 'searchWarehouse']);
