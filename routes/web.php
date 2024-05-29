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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('dashboard', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', 'App\Http\Controllers\CategoryController');
    Route::get('/apiCategories', 'App\Http\Controllers\CategoryController@apiCategories')->name('api.categories');
    Route::get('/exportCategoriesAll', 'App\Http\Controllers\CategoryController@exportCategoriesAll')->name('exportPDF.categoriesAll');
    Route::get('/exportCategoriesAllExcel', 'App\Http\Controllers\CategoryController@exportExcel')->name('exportExcel.categoriesAll');


    Route::resource('customers', 'App\Http\Controllers\CustomerController');
    Route::get('/apiCustomers', 'App\Http\Controllers\CustomerController@apiCustomers')->name('api.customers');
    Route::post('/importCustomers', 'App\Http\Controllers\CustomerController@ImportExcel')->name('import.customers');
    Route::get('/exportCustomersAll', 'App\Http\Controllers\CustomerController@exportCustomersAll')->name('exportPDF.customersAll');
    Route::get('/exportCustomersAllExcel', 'App\Http\Controllers\CustomerController@exportExcel')->name('exportExcel.customersAll');

    Route::resource('sales', 'App\Http\Controllers\SalesController');
    Route::get('/apiSales', 'App\Http\Controllers\SalesController@apiSales')->name('api.sales');
    Route::post('/importSales', 'App\Http\Controllers\SalesController@ImportExcel')->name('import.sales');
    Route::get('/exportSalesAll', 'App\Http\Controllers\SalesController@exportSalesAll')->name('exportPDF.salesAll');
    Route::get('/exportSalesAllExcel', 'App\Http\Controllers\SalesController@exportExcel')->name('exportExcel.salesAll');

    Route::resource('suppliers', 'App\Http\Controllers\SupplierController');
    Route::get('/apiSuppliers', 'App\Http\Controllers\SupplierController@apiSuppliers')->name('api.suppliers');
    Route::post('/importSuppliers', 'App\Http\Controllers\SupplierController@ImportExcel')->name('import.suppliers');
    Route::get('/exportSupplierssAll', 'App\Http\Controllers\SupplierController@exportSuppliersAll')->name('exportPDF.suppliersAll');
    Route::get('/exportSuppliersAllExcel', 'App\Http\Controllers\SupplierController@exportExcel')->name('exportExcel.suppliersAll');

    Route::resource('products', 'App\Http\Controllers\ProductController');
    Route::get('/apiProducts', 'App\Http\Controllers\ProductController@apiProducts')->name('api.products');

    Route::resource('productsOut', 'App\Http\Controllers\ProductKeluarController');
    Route::get('/apiProductsOut', 'App\Http\Controllers\ProductKeluarController@apiProductsOut')->name('api.productsOut');
    Route::get('/exportProductKeluarAll', 'App\Http\Controllers\ProductKeluarController@exportProductKeluarAll')->name('exportPDF.productKeluarAll');
    Route::get('/exportProductKeluarAllExcel', 'App\Http\Controllers\ProductKeluarController@exportExcel')->name('exportExcel.productKeluarAll');
    Route::get('/exportProductKeluar/{id}', 'App\Http\Controllers\ProductKeluarController@exportProductKeluar')->name('exportPDF.productKeluar');

    Route::resource('productsIn', 'App\Http\Controllers\ProductMasukController');
    Route::get('/apiProductsIn', 'App\Http\Controllers\ProductMasukController@apiProductsIn')->name('api.productsIn');
    Route::get('/exportProductMasukAll', 'App\Http\Controllers\ProductMasukController@exportProductMasukAll')->name('exportPDF.productMasukAll');
    Route::get('/exportProductMasukAllExcel', 'App\Http\Controllers\ProductMasukController@exportExcel')->name('exportExcel.productMasukAll');
    Route::get('/exportProductMasuk/{id}', 'App\Http\Controllers\ProductMasukController@exportProductMasuk')->name('exportPDF.productMasuk');
});
