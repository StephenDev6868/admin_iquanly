<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('admin')->group(function () {
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.view');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('login.doLogin');

    Route::group(['middleware' => 'auth:user'], function () {
        Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

        Route::prefix('users')->group(function () {
            Route::get('', [\App\Http\Controllers\UserStaffController::class, 'index'])->name('admin.users.list');
            Route::get('/create', [\App\Http\Controllers\UserStaffController::class, 'create'])->name('admin.users.create');
            Route::post('/create', [\App\Http\Controllers\UserStaffController::class, 'store'])->name('admin.users.doCreate');
            Route::get('/show/{user}', [\App\Http\Controllers\UserStaffController::class, 'show'])->name('admin.users.show');
            Route::put('/update/{user}', [\App\Http\Controllers\UserStaffController::class, 'update'])->name('admin.users.doUpdate');
            Route::delete('/delete/{user}', [\App\Http\Controllers\UserStaffController::class, 'destroy'])->name('admin.users.delete');
        });


        Route::prefix('companies')->group(function () {
            Route::get('', [\App\Http\Controllers\CompanyController::class, 'index'])->name('admin.companies.list');
            Route::put('/update/{company}', [\App\Http\Controllers\CompanyController::class, 'update'])->name('admin.companies.update');
        });


        Route::prefix('boards')->group(function () {
            Route::get('', [\App\Http\Controllers\BoardController::class, 'index'])->name('admin.boards.list');
            Route::get('/create', [\App\Http\Controllers\BoardController::class, 'create'])->name('admin.boards.create');
            Route::post('/create', [\App\Http\Controllers\BoardController::class, 'store'])->name('admin.boards.doCreate');
            Route::get('/show/{board}', [\App\Http\Controllers\BoardController::class, 'show'])->name('admin.boards.show');
            Route::put('/update/{board}', [\App\Http\Controllers\BoardController::class, 'update'])->name('admin.boards.update');
            Route::delete('/delete/{board}', [\App\Http\Controllers\BoardController::class, 'destroy'])->name('admin.boards.delete');
        });

        Route::prefix('products')->group(function () {
            Route::get('', [\App\Http\Controllers\ProductController::class, 'index'])->name('admin.products.list');
            Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('admin.products.doCreate');
            Route::get('/show/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('admin.products.show');
            Route::put('/update/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('admin.products.update');
            Route::delete('/delete/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('admin.products.delete');
        });

        Route::prefix('product-steps')->group(function () {
            Route::get('', [\App\Http\Controllers\ProductStepController::class, 'index'])->name('admin.productSteps.list');
            Route::get('/create', [\App\Http\Controllers\ProductStepController::class, 'create'])->name('admin.productSteps.create');
            Route::post('/create', [\App\Http\Controllers\ProductStepController::class, 'store'])->name('admin.productSteps.doCreate');
            Route::get('/show/{productStep}', [\App\Http\Controllers\ProductStepController::class, 'show'])->name('admin.productSteps.show');
            Route::get('/show-quantity', [\App\Http\Controllers\ProductStepController::class, 'showQuantity'])->name('admin.productSteps.showQuantity');
            Route::post('/update-quantity', [\App\Http\Controllers\ProductStepController::class, 'updateQuantity'])->name('admin.productSteps.updateQuantity');
            Route::put('/update/{productStep}', [\App\Http\Controllers\ProductStepController::class, 'update'])->name('admin.productSteps.update');
            Route::get('/generate-work-quantity/{productStep}', [\App\Http\Controllers\ProductStepController::class, 'showGenerateWorkQuantity'])->name('admin.productSteps.showGenerateWorkQuantity');
            Route::post('/generate-work-quantity/{productStep}', [\App\Http\Controllers\ProductStepController::class, 'doGenerateWorkQuantity'])->name('admin.productSteps.doGenerateWorkQuantity');
            Route::delete('/delete/{productStep}', [\App\Http\Controllers\ProductStepController::class, 'destroy'])->name('admin.productSteps.delete');
        });

        Route::prefix('roles')->group(function () {
            Route::get('', [\App\Http\Controllers\RoleController::class, 'index'])->name('admin.roles.list');
            Route::get('/create', [\App\Http\Controllers\RoleController::class, 'create'])->name('admin.roles.create');
            Route::post('/create', [\App\Http\Controllers\RoleController::class, 'store'])->name('admin.roles.doCreate');
            Route::get('/show/{role}', [\App\Http\Controllers\RoleController::class, 'show'])->name('admin.roles.show');
            Route::put('/update/{role}', [\App\Http\Controllers\RoleController::class, 'update'])->name('admin.roles.update');
            Route::delete('/delete/{role}', [\App\Http\Controllers\RoleController::class, 'destroy'])->name('admin.roles.delete');
        });

        Route::prefix('posts')->group(function () {
            Route::get('', [\App\Http\Controllers\PostController::class, 'index'])->name('admin.posts.list');
            Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
            Route::post('/create', [\App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.doCreate');
            Route::get('/show/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('admin.posts.show');
            Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
            Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('admin.posts.delete');
        });

        Route::prefix('warehouse-device')->group(function () {
            Route::get('', [\App\Http\Controllers\WDeviceController::class, 'index'])->name('admin.wDevices.list');
            Route::get('/create', [\App\Http\Controllers\WDeviceController::class, 'create'])->name('admin.wDevices.create');
            Route::post('/create', [\App\Http\Controllers\WDeviceController::class, 'store'])->name('admin.wDevices.doCreate');
            Route::get('/show/{wDevice}', [\App\Http\Controllers\WDeviceController::class, 'show'])->name('admin.wDevices.show');
            Route::put('/update/{wDevice}', [\App\Http\Controllers\WDeviceController::class, 'update'])->name('admin.wDevices.update');
            Route::delete('/delete/{wDevice}', [\App\Http\Controllers\WDeviceController::class, 'destroy'])->name('admin.wDevices.delete');
        });

        Route::prefix('warehouse-tool')->group(function () {
            Route::get('', [\App\Http\Controllers\WToolController::class, 'index'])->name('admin.wTools.list');
            Route::get('/create', [\App\Http\Controllers\WToolController::class, 'create'])->name('admin.wTools.create');
            Route::post('/create', [\App\Http\Controllers\WToolController::class, 'store'])->name('admin.wTools.doCreate');
            Route::get('/show/{wTool}', [\App\Http\Controllers\WToolController::class, 'show'])->name('admin.wTools.show');
            Route::put('/update/{wTool}', [\App\Http\Controllers\WToolController::class, 'update'])->name('admin.wTools.update');
            Route::delete('/delete/{wTool}', [\App\Http\Controllers\WToolController::class, 'destroy'])->name('admin.wTools.delete');
        });

        Route::prefix('warehouse-material')->group(function () {
            Route::get('', [\App\Http\Controllers\WMaterialController::class, 'index'])->name('admin.wMaterials.list');
            Route::get('/create', [\App\Http\Controllers\WMaterialController::class, 'create'])->name('admin.wMaterials.create');
            Route::post('/create', [\App\Http\Controllers\WMaterialController::class, 'store'])->name('admin.wMaterials.doCreate');
            Route::get('/show/{wMaterial}', [\App\Http\Controllers\WMaterialController::class, 'show'])->name('admin.wMaterials.show');
            Route::put('/update/{wMaterial}', [\App\Http\Controllers\WMaterialController::class, 'update'])->name('admin.wMaterials.update');
            Route::delete('/delete/{wMaterial}', [\App\Http\Controllers\WMaterialController::class, 'destroy'])->name('admin.wMaterials.delete');
        });

        Route::prefix('common')->group(function () {
            Route::get('', [\App\Http\Controllers\CommonController::class, 'showAllConfig'])->name('admin.commons.list');
            Route::get('/create-supplier', [\App\Http\Controllers\CommonController::class, 'createSupplier'])->name('admin.commons.createSupplier');
            Route::post('/create-supplier', [\App\Http\Controllers\CommonController::class, 'doCreateSupplier'])->name('admin.commons.doCreateSupplier');
            Route::put('/update-suppliers', [\App\Http\Controllers\CommonController::class, 'doUpdateSupplier'])->name('admin.commons.doUpdateSuppliers');
            Route::get('/create-material', [\App\Http\Controllers\CommonController::class, 'createMaterial'])->name('admin.commons.createMaterial');
            Route::post('/create-material', [\App\Http\Controllers\CommonController::class, 'doCreateMaterial'])->name('admin.commons.doCreateMaterial');
            Route::put('/update-materials', [\App\Http\Controllers\CommonController::class, 'doUpdateMaterial'])->name('admin.commons.doUpdateMaterials');
        });
    });
});

//Route::get('/{id}', [\App\Http\Controllers\LexaController::class, 'index']);

Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginStaff'])->name('loginStaff');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'doLoginStaff'])->name('doLoginStaff');

Route::group(['middleware' => 'auth:user'], function() {
    Route::prefix('users')->group(function () {
        Route::get('', [\App\Http\Controllers\ClientController::class, 'index'])->name('user.home');
        Route::get('info', [\App\Http\Controllers\ClientController::class, 'info'])->name('user.info');
    });
});
//Route::get('{slug}/{type}', [\App\Http\Controllers\ClientController::class, 'category'])
//    ->name('user.category.list');
//Route::get('/{slug}/detail/{post}', [\App\Http\Controllers\ClientController::class, 'detail'])
//    ->name('user.category.detail');
