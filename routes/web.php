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
Route::get('/product/{id}','TemplateController@productshow')->name('product.show');
Route::resource('/cart','CartController');
Route::resource('/check_out','CheckOutController');
Route::resource('/order','OrderController');

Route::get('/mailable', function () {
    $order = App\Order::find(7);
    return new App\Mail\OrderCompleted($order);
});
Route::get('/filter_product','ProductController@filterProduct')->name('filter_products');

Route::post('/add_to_cart','CartController@addToCart')->name('add_to_cart');
Route::delete('/remove_from_cart/{id}','CartController@removeFromCart')->name('remove_from_cart');

Route::resource('/confirmation','ConfirmationController');
Route::resource('/thank_you','ThankYouController');



// Route::get('/shopping_cart','TemplateController@cart')->name('cart');
Route::get('/contact_us','TemplateController@contact')->name('contact');
Route::get('/about_us','TemplateController@about')->name('about');
Route::post('/send_contact_form','MailerController@sendContactForm')->name('send_contact_form');
Route::get('/search','ProductController@search')->name('search');
Route::get('/category/{id}','ProductController@category')->name('category');

//previews





Auth::routes();
Route::prefix('manage')->middleware('auth')->group(function(){
    
   

// Route::get('/shopping_cart','PreviewController@cart')->name('preview.cart');
// Route::get('/contact_us','PreviewController@contact')->name('preview.contact');
// Route::get('/about_us','PreviewController@about')->name('preview.about');
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
Route::put('/cancel_order/{id}','OrderController@cancelOrder');
Route::resource('/preview','PreviewController');
Route::get('/markOrderAsRead','OrderController@markOrderAsRead');

// Route::get('/template/{colour}', function($colour){


   
    
//     return view('template.template1.previews.index')->with('colour',$colour);
    
// })->name('template1.previews');

Route::post('/upload','SettingController@upload')->name('upload');

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/initial_setup', 'HomeController@initialSetup')->name('initial_setup');

