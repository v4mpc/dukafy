<?php

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
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    
    Route::resource('products', 'ProductController');
    
    

Route::resource('/categories', 'CategoryController');
Route::resource('/sub_categories', 'SubCategoryController');
Route::resource('/out_stock', 'OutStockController');
Route::resource('/featured', 'FeaturedController');
//Route::resource('/reports', 'ReportController');
Route::resource('/users', 'UserController');
Route::resource('/orders', 'OrderController');
Route::resource('/settings', 'SettingController');
Route::get('/layout_form','SettingController@getLayoutForm')->name('settings.layout_form');
Route::get('/logo_form','SettingController@getLogoForm')->name('settings.logo_form');
Route::get('/layout_form','SettingController@getLayoutForm')->name('settings.layout_form');
Route::get('/company_address_form','SettingController@getCompanyAddressForm')->name('settings.company_address_form');



});


Route::get('/home', 'HomeController@index')->name('home');
