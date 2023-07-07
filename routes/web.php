<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Migration, Seed, Optimize
Route::get(env('deploy_url'), function(){
    Artisan::call('migrate');
    Artisan::call('db:seed');
    Artisan::call('optimize:clear');

    return "Success";
});


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [Admin\DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [Admin\ProfileController::class, 'index'])->name('index');
        Route::post('update', [Admin\ProfileController::class, 'update'])->name('update');
    });

    Route::prefix('brand')->name('brand.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\BrandController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\BrandController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\BrandController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\BrandController::class, 'trash'])->name('trash');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\CategoryController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\CategoryController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\CategoryController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\CategoryController::class, 'trash'])->name('trash');
    });

    Route::prefix('sub-category')->name('sub-category.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\SubCategoryController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\SubCategoryController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\SubCategoryController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\SubCategoryController::class, 'trash'])->name('trash');
    });

    Route::prefix('tag')->name('tag.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\TagController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\TagController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\TagController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\TagController::class, 'trash'])->name('trash');
    });

    Route::prefix('attribute')->name('attribute.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\AttributeController::class, 'index'])->name('index');
        Route::post('add-or-update', [Admin\AttributeController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\AttributeController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\AttributeController::class, 'trash'])->name('trash');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::match(['get', 'post'], '/', [Admin\ProductController::class, 'index'])->name('index');
        Route::get('add', [Admin\ProductController::class, 'add'])->name('add');
        Route::post('add-or-update', [Admin\ProductController::class, 'addOrUpdate'])->name('add.or.update');
        Route::post('update-status', [Admin\ProductController::class, 'updateStatus'])->name('update.status');
        Route::post('trash', [Admin\ProductController::class, 'trash'])->name('trash');
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
