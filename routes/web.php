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

Route::get('/', function () {return redirect('/HOME');});
Route::get('locale/{locale}', function ($locale) {session::Put('locale', $locale);return redirect()->back();})->name('locale');
Route::get('/HOME','App\Http\Controllers\HomeController@home')->name('HOME');
Route::get('/ABOUT','App\Http\Controllers\AboutController@about')->name('ABOUT');
Route::get('/GET_IN_TOUCH','App\Http\Controllers\ContactController@contact')->name('GET_IN_TOUCH');
Route::get('/MEDIA','App\Http\Controllers\MediaController@show')->name('MEDIA');
Route::get('/CSR','App\Http\Controllers\CsrController@show')->name('CSR');
Route::get('/PRINT_MEDIA_ACADEMY','App\Http\Controllers\PmacController@show')->name('PRINT_MEDIA_ACADEMY');
Route::get('/SERVICE','App\Http\Controllers\ServicesController@show')->name('SERVICE');
Route::get('/PRODUCTS','App\Http\Controllers\ProductsController@categories')->name('PRODUCTS');
Route::get('/PRODUCTS/CATEGORY/{id}','App\Http\Controllers\ProductsController@sub_category')->name('sub_products');
Route::get('/PRODUCTS/SUB_CATEGORY/{id}','App\Http\Controllers\ProductsController@final_cat')->name('sub2_products');
Route::post('/job_contact','App\Http\Controllers\ContactController@job_contact');




Route::get('/career','App\Http\Controllers\CarrerController@show')->name('career');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
