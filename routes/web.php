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
//dukafy home page routes
// Route::view('/home', 'dukafy.index')->name('dukafy');

//dukafy admin dashboard routes
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('users', 'UserController');
    Route::resource('accounts', 'AccountController');
    Route::get('suspend/{id}', 'AccountController@suspend')->name('accounts.suspend');
    Route::get('activate/{id}', 'AccountController@activate')->name('accounts.activate');
    Route::put('change_password', 'UserController@updatePassword')->name('admin.update.password');
    Route::get('change_password', 'UserController@getPassword')->name('admin.get.password');
    Route::put('edit_user', 'UserController@updateUser')->name('admin.update.user');
    Route::put('renew/{id}', 'AccountController@renew')->name('renew');
    Route::put('new_account/{account}', 'AccountController@admincreateAccount')->name('new');

    Route::get('edit_user', 'UserController@getUser')->name('admin.get.user');
    Route::get('logs', 'UserController@getLogs')->name('admin.logs');
});

Route::post('request_account', 'AccountController@store')->name('request_account');



//client store routes

    //the routes are store dependant
    //middleware will help us with that
    Route::get('/', 'TemplateController@index')->name('start');
    Route::get('/products', 'TemplateController@products')->name('products');
    Route::get('/product/{id}', 'TemplateController@productshow')->name('product.show');
    Route::resource('/cart', 'CartController');
    Route::resource('/check_out', 'CheckOutController');
    Route::resource('/order', 'OrderController');
    Route::view('maintanance', 'maintanance');
    Route::get('/filter_product', 'ProductController@filterProduct')->name('filter_products');
    Route::post('/add_to_cart', 'CartController@addToCart')->name('add_to_cart');
    Route::delete('/remove_from_cart/{id}', 'CartController@removeFromCart')->name('remove_from_cart');
    Route::resource('/confirmation', 'ConfirmationController');
    Route::resource('/thank_you', 'ThankYouController');
    // Route::get('/shopping_cart','TemplateController@cart')->name('cart');
    Route::get('/contact_us', 'TemplateController@contact')->name('contact');
    Route::get('/about_us', 'TemplateController@about')->name('about');
    Route::post('/send_contact_form', 'MailerController@sendContactForm')->name('send_contact_form');
    Route::get('/search', 'ProductController@search')->name('search');
    Route::get('/category/{id}', 'ProductController@category')->name('category');
    Route::get('/mailable', function () {
        $order = App\Order::find(7);
        return new App\Mail\OrderCompleted($order, 'yona101992@gmail.com');
    });
//login routes login and admin i think
Auth::routes();
// client dashboard routes
Route::prefix('manage')->middleware(['auth','client'])->group(function () {
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
    Route::put('update_logo/{id}', 'SettingController@updateLogo')->name('update.logo');
    Route::put('update_slider/{id}', 'SettingController@updateSlider')->name('update.slider');
    Route::put('update_basic_info/{id}', 'SettingController@updateBasicInfo')->name('update.basic.info');
    Route::put('update_about_us/{id}', 'SettingController@updateAbout')->name('update.about.us');
    Route::get('/layout', 'SettingController@getLayoutForm')->name('settings.layout_form');
    Route::get('/basic_info', 'SettingController@getBasicInfoForm')->name('settings.basic_info_form');
    Route::get('/about_store', 'SettingController@getAboutForm')->name('settings.about_store_form');
    Route::get('/logo', 'SettingController@getLogoForm')->name('settings.logo_form');
    Route::get('/slider_images', 'SettingController@getSliderForm')->name('settings.slider_form');
    Route::get('/sub_cat/{id}', 'ProductController@getSubCategories')->name('subcategory_ajax');
    Route::get('/make_featured/{id}', 'ProductController@makeFeatured')->name('make_featured_ajax');
    Route::get('/remove_featured/{id}', 'ProductController@removeFeatured')->name('remove_featured_ajax');
    Route::get('/make_out_stock/{id}', 'ProductController@makeOutstock')->name('make_out_stock_ajax');
    Route::get('/remove_out_stock/{id}', 'ProductController@removeOutstock')->name('remove_out_stock_ajax');
    Route::post('/add_category', 'CategoryController@addCategory');
    Route::put('/cancel_order/{id}', 'OrderController@cancelOrder');
    Route::resource('/preview', 'PreviewController');
    Route::get('/markOrderAsRead', 'OrderController@markOrderAsRead');
    Route::get('/go_back', function () {
        return back();
    })->name('back');
    Route::post('/upload', 'SettingController@upload')->name('upload');
    Route::get('/home', 'HomeController@index')->name('home');
});



Route::get('/initial_setup', 'HomeController@initialSetup')->name('initial_setup');
