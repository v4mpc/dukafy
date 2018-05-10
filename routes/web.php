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

Route::get('/', 'TemplateController@index')->name('start');
Route::get('/products','TemplateController@products')->name('products');
Route::get('/products/{id}','TemplateController@productshow')->name('product.show');
Route::get('/shopping_cart','TemplateController@cart')->name('cart');
Route::get('/contact_us','TemplateController@contact')->name('contact');
Route::get('/about_us','TemplateController@about')->name('about');

//previews
Route::get('/shopping_cart','PreviewController@cart')->name('preview.cart');
Route::get('/contact_us','PreviewController@contact')->name('preview.contact');
Route::get('/about_us','PreviewController@about')->name('preview.about');




Auth::routes();
Route::prefix('manage')->middleware('auth')->group(function(){
    
   

    
Route::resource('/products', 'ProductController');
// Route::resource('/variations', 'VariationController');
Route::resource('/categories', 'CategoryController');
Route::resource('/sub_categories', 'SubCategoryController');
Route::resource('/out_stock', 'OutStockController');
Route::resource('/featured', 'FeaturedController');
//Route::resource('/reports', 'ReportController');
Route::resource('/users', 'UserController');
Route::resource('/orders', 'OrderController');
Route::resource('/settings', 'SettingController');
// Route::resource('/variations', 'VariationController');

Route::get('/layout_form','SettingController@getLayoutForm')->name('settings.layout_form');
Route::get('/logo_form','SettingController@getLogoForm')->name('settings.logo_form');
Route::get('/layout_form','SettingController@getLayoutForm')->name('settings.layout_form');
Route::get('/company_address_form','SettingController@getCompanyAddressForm')->name('settings.company_address_form');
Route::get('/sub_cat/{id}', 'ProductController@getSubCategories')->name('subcategory_ajax');
Route::get('/make_featured/{id}', 'ProductController@makeFeatured')->name('make_featured_ajax');
Route::get('/remove_featured/{id}', 'ProductController@removeFeatured')->name('remove_featured_ajax');
Route::get('/make_out_stock/{id}', 'ProductController@makeOutstock')->name('make_out_stock_ajax');
Route::get('/remove_out_stock/{id}', 'ProductController@removeOutstock')->name('remove_out_stock_ajax');
Route::post('/add_category','CategoryController@addCategory');
Route::resource('/preview','PreviewController');

// Route::get('/template/{colour}', function($colour){


   
    
//     return view('template.template1.previews.index')->with('colour',$colour);
    
// })->name('template1.previews');

Route::post('/upload','SettingController@upload')->name('upload');

});


Route::get('/home', 'HomeController@index')->name('home');
