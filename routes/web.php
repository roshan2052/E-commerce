<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\SettingController;



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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('product_details/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'productDetails'])->name('frontend.product_details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['web','auth',])->group(function () {

    // Test
    Route::get('test', [App\Http\Controllers\TestController::class, 'index'])->name('test.index');
    Route::get('test/create', [App\Http\Controllers\TestController::class, 'create'])->name('test.create');
    Route::post('test', [App\Http\Controllers\TestController::class, 'store'])->name('test');
    Route::get('test/{id}', [App\Http\Controllers\TestController::class, 'show'])->name('test.show');
    Route::get('test/{id}/edit', [App\Http\Controllers\TestController::class, 'edit'])->name('test.edit');
    Route::put('test/{id}/update', [App\Http\Controllers\TestController::class, 'update'])->name('test.update');
    Route::delete('test/{id}/delete', [App\Http\Controllers\TestController::class, 'delete'])->name('test.delete');

    // Category
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/{slug}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('category/{slug}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/{slug}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{slug}/delete', [CategoryController::class, 'delete'])->name('category.delete');

    // Sub Category
    Route::get('sub-category', [SubCategoryController::class, 'index'])->name('sub_category.index');
    Route::get('sub-category/create', [SubCategoryController::class, 'create'])->name('sub_category.create');
    Route::post('sub-category/store', [SubCategoryController::class, 'store'])->name('sub_category.store');
    Route::get('sub-category/{slug}', [SubCategoryController::class, 'show'])->name('sub_category.show');
    Route::get('sub-category/{slug}/edit', [SubCategoryController::class, 'edit'])->name('sub_category.edit');
    Route::put('sub-category/{slug}/update', [SubCategoryController::class, 'update'])->name('sub_category.update');
    Route::delete('sub-category/{slug}/delete', [SubCategoryController::class, 'delete'])->name('sub_category.delete');

    // Product
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/{slug}', [ProductController::class, 'show'])->name('product.show');
    Route::get('product/{slug}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('product/{slug}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product/{slug}/delete', [ProductController::class, 'delete'])->name('product.delete');

    // Tag
    Route::get('tag', [TagController::class, 'index'])->name('tag.index');
    Route::get('tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('tag/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('tag/{slug}', [TagController::class, 'show'])->name('tag.show');
    Route::get('tag/{slug}/edit', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('tag/{slug}/update', [TagController::class, 'update'])->name('tag.update');
    Route::delete('tag/{slug}/delete', [TagController::class, 'delete'])->name('tag.delete');

    // Attribute
    Route::get('attribute', [AttributeController::class, 'index'])->name('attribute.index');
    Route::get('attribute/create', [AttributeController::class, 'create'])->name('attribute.create');
    Route::post('attribute/store', [AttributeController::class, 'store'])->name('attribute.store');
    Route::get('attribute/{id}', [AttributeController::class, 'show'])->name('attribute.show');
    Route::get('attribute/{id}/edit', [AttributeController::class, 'edit'])->name('attribute.edit');
    Route::put('attribute/{id}/update', [AttributeController::class, 'update'])->name('attribute.update');
    Route::delete('attribute/{id}/delete', [AttributeController::class, 'delete'])->name('attribute.delete');

    // Setting
    Route::get('setting/create', [SettingController::class, 'create'])->name('setting.create');
    Route::post('setting/store', [SettingController::class, 'store'])->name('setting.store');
    Route::get('setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('setting/{id}/update', [SettingController::class, 'update'])->name('setting.update');

});
