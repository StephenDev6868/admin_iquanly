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

        Route::prefix('sitemap')->group(function () {
            Route::get('', [\App\Http\Controllers\SitemapController::class, 'sitemap'])->name('admin.sitemap');
        });
    });
});

//Route::get('/{id}', [\App\Http\Controllers\LexaController::class, 'index']);

Route::get('', [\App\Http\Controllers\ClientController::class, 'index'])->name('home');
Route::get('{slug}/{type}', [\App\Http\Controllers\ClientController::class, 'category'])
    ->name('user.category.list');
Route::get('/{slug}/detail/{post}', [\App\Http\Controllers\ClientController::class, 'detail'])
    ->name('user.category.detail');
