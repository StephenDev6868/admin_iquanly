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
            Route::get('', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.users.list');
            Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
            Route::post('/create', [\App\Http\Controllers\UserController::class, 'store'])->name('admin.users.doCreate');
            Route::get('/show/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('admin.users.show');
            Route::put('/update/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
            Route::delete('/delete/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.delete');
        });

//        Route::prefix('product')->group(function () {
//            Route::get('', [\App\Http\Controllers\ProductController::class, 'index'])->name('admin.products.list');
//            Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('admin.products.create');
//            Route::post('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('admin.products.create');
//            Route::get('/show/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('admin.products.show');
//            Route::put('/update/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('admin.products.update');
//            Route::delete('/delete/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('admin.products.delete');
//        });

        Route::prefix('posts')->group(function () {
            Route::get('', [\App\Http\Controllers\PostController::class, 'index'])->name('admin.posts.list');
            Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
            Route::post('/create', [\App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.doCreate');
            Route::get('/show/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('admin.posts.show');
            Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
            Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('admin.posts.delete');
        });

        Route::prefix('sites')->group(function () {
            Route::get('list', [\App\Http\Controllers\SiteController::class, 'index'])->name('admin.sites.list');
            Route::get('test/{site}', [\App\Http\Controllers\SiteController::class, 'editor'])->name('admin.sites.test');
            Route::get('/preview/{config}', [\App\Http\Controllers\SiteController::class, 'previewTemplate'])->name('admin.sites.preview');
            Route::get('/create', [\App\Http\Controllers\SiteController::class, 'create'])->name('admin.sites.create');
            Route::post('/create', [\App\Http\Controllers\SiteController::class, 'store'])->name('admin.sites.doCreate');
            Route::get('/show/{site}', [\App\Http\Controllers\SiteController::class, 'show'])->name('admin.sites.show');
            Route::put('/update/{site}', [\App\Http\Controllers\SiteController::class, 'update'])->name('admin.sites.update');
            Route::delete('/delete/{site}', [\App\Http\Controllers\SiteController::class, 'destroy'])->name('admin.sites.delete');
        });

        Route::prefix('categories')->group(function () {
            Route::get('', [\App\Http\Controllers\CategoryController::class, 'index'])
                ->name('admin.categories.list');
            Route::get('create', [\App\Http\Controllers\CategoryController::class, 'create'])
                ->name('admin.categories.create');
            Route::post('doCreate', [\App\Http\Controllers\CategoryController::class, 'store'])
                ->name('admin.categories.doCreate');
            Route::get('detail.blade.php/{subCategory}', [\App\Http\Controllers\CategoryController::class, 'show'])
                ->name('admin.categories.edit');
            Route::put('update/{subCategory}', [\App\Http\Controllers\CategoryController::class, 'update'])
                ->name('admin.categories.doEdit');
            Route::delete('{subCategory}', [\App\Http\Controllers\CategoryController::class, 'destroy']);
        });

        Route::prefix('main-categories')->group(function () {
            Route::get('', [\App\Http\Controllers\MainCategoryController::class, 'index'])->name('admin.mainCategories.list');
            Route::get('create', [\App\Http\Controllers\MainCategoryController::class, 'create'])->name('admin.mainCategories.add');
            Route::post('doCreate', [\App\Http\Controllers\MainCategoryController::class, 'store'])->name('admin.mainCategories.doCreate');
            Route::get('detail.blade.php/{category}', [\App\Http\Controllers\MainCategoryController::class, 'show'])
                ->name('admin.mainCategories.edit');
            Route::put('update/{category}', [\App\Http\Controllers\MainCategoryController::class, 'update'])
                ->name('admin.mainCategories.doEdit');
        });

        Route::prefix('author')->group(function () {
            Route::get('', [\App\Http\Controllers\AuthorController::class, 'index'])
                ->name('admin.author.list');
            Route::get('/show/{author}', [\App\Http\Controllers\AuthorController::class, 'show'])
                ->name('admin.author.detail.blade.php');
            Route::get('/create', [\App\Http\Controllers\AuthorController::class, 'create'])
                ->name('admin.author.create');
            Route::post('/create', [\App\Http\Controllers\AuthorController::class, 'store'])
                ->name('admin.author.doCreate');
            Route::put('/update/{author}', [\App\Http\Controllers\AuthorController::class, 'update'])
                ->name('admin.author.doEdit');
            Route::delete('{author}', [\App\Http\Controllers\AuthorController::class, 'destroy']);
        });
    });
});

//Route::get('/{id}', [\App\Http\Controllers\LexaController::class, 'index']);

Route::get('', [\App\Http\Controllers\ClientController::class, 'index']);
Route::get('{slug}/{type}', [\App\Http\Controllers\ClientController::class, 'category'])
    ->name('user.category.list');
Route::get('/{slug}/detail/{post}', [\App\Http\Controllers\ClientController::class, 'detail'])
    ->name('user.category.detail');
