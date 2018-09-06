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

Route::get('/start', 'TemplateController@index')->name('start');
Route::get('/products','TemplateController@products')->name('products');
Route::get('/product/{id}','TemplateController@productshow')->name('product.show');
Route::resource('/cart','CartController');
Route::resource('/check_out','CheckOutController');
Route::resource('/order','OrderController');
Route::view('maintanance','maintanance');

Route::get('/mailable', function () {
    $order = App\Order::find(7);
    return new App\Mail\OrderCompleted($order,'yona101992@gmail.com');
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

//this is only for demo perpose for template 2
Route::get('/template2/start', 'TemplateController@index')->name('template2.start');
Route::get('/template2/cart','CartController@index')->name('template2.cart.index');
Route::get('/template2/product/{id}','TemplateController@productshow')->name('template2.product.show');
Route::get('/template2/category/{id}','ProductController@category')->name('template2.category');
Route::get('/template2/contact_us','TemplateController@contact')->name('template2.contact');
Route::get('/template2/about_us','TemplateController@about')->name('template2.about');
Route::get('/template2/check_out','CheckOutController@create');
Route::view('/template2/thank_you','template/template2/thankyou');

//this is only for demo perpose for template 3
Route::get('/template3/start', 'TemplateController@index')->name('template3.start');
Route::get('/template3/cart','CartController@index')->name('template3.cart.index');
Route::get('/template3/product/{id}','TemplateController@productshow')->name('template3.product.show');
Route::get('/template3/category/{id}','ProductController@category')->name('template3.category');
Route::get('/template3/contact_us','TemplateController@contact')->name('template3.contact');
Route::get('/template3/about_us','TemplateController@about')->name('template3.about');
Route::get('/template3/check_out','CheckOutController@create');
Route::view('/template3/thank_you','template/template3/thankyou');









Auth::routes();
Route::prefix('manage')->middleware('auth')->group(function(){
Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');
Route::resource('sub_categories', 'SubCategoryController');
Route::resource('out_stock', 'OutStockController');
Route::resource('featured', 'FeaturedController');
Route::resource('users', 'UserController');
Route::get('change_password/{id}', 'UserController@getPasswordForm')->name('change.password');
Route::put('save_password/{id}', 'UserController@updatePassword')->name('update.password');
Route::resource('orders', 'OrderController');
Route::resource('settings', 'SettingController');
Route::put('update_logo/{id}','SettingController@updateLogo')->name('update.logo');
Route::put('update_slider/{id}','SettingController@updateSlider')->name('update.slider');
Route::put('update_basic_info/{id}','SettingController@updateBasicInfo')->name('update.basic.info');
Route::put('update_about_us/{id}','SettingController@updateAbout')->name('update.about.us');
Route::get('/layout','SettingController@getLayoutForm')->name('settings.layout_form');
Route::get('/basic_info','SettingController@getBasicInfoForm')->name('settings.basic_info_form');
Route::get('/about_store','SettingController@getAboutForm')->name('settings.about_store_form');
Route::get('/logo','SettingController@getLogoForm')->name('settings.logo_form');
Route::get('/slider_images','SettingController@getSliderForm')->name('settings.slider_form');
Route::get('/sub_cat/{id}', 'ProductController@getSubCategories')->name('subcategory_ajax');
Route::get('/make_featured/{id}', 'ProductController@makeFeatured')->name('make_featured_ajax');
Route::get('/remove_featured/{id}', 'ProductController@removeFeatured')->name('remove_featured_ajax');
Route::get('/make_out_stock/{id}', 'ProductController@makeOutstock')->name('make_out_stock_ajax');
Route::get('/remove_out_stock/{id}', 'ProductController@removeOutstock')->name('remove_out_stock_ajax');
Route::post('/add_category','CategoryController@addCategory');
Route::put('/cancel_order/{id}','OrderController@cancelOrder');
Route::resource('/preview','PreviewController');
Route::get('/markOrderAsRead','OrderController@markOrderAsRead');
Route::get('/go_back',function(){
    return back();
})->name('back');
Route::post('/upload','SettingController@upload')->name('upload');

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/initial_setup', 'HomeController@initialSetup')->name('initial_setup');

