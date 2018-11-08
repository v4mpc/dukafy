<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('whois/{domain}', function ($domain) {
    // dd('df');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://mydomains.dukafy.co.tz/includes/api.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt(
    $ch,
    CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'action' => 'DomainWhois',
            // See https://developers.whmcs.com/api/authentication
            'username' => 'admin',
            'password' => md5('B5r9gFuu87EDPemF'),
            'domain' => $domain.".co.tz",
            'responsetype' => 'json',
        )
    )
);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    echo $response;
    curl_close($ch);
});




//mobile api shall go here

//


Route::post('mobile/login', 'API\AuthController@login');
Route::group(['prefix' => 'mobile', 'middleware' => 'jwt.auth'], function () {
    Route::get('home/{account_id}', 'API\AccountController@home');
    Route::post('logout', 'API\AuthController@logout');
    Route::get('categories/{account_id}', 'API\CategoryController@index');
    Route::post('category', 'API\CategoryController@create');
    Route::post('product/{account_id}', 'API\ProductController@store');
    Route::get('products/{account_id}', 'API\ProductController@index');
    Route::get('product/{account_id}/{id}', 'API\ProductController@show');
    Route::get('orders/{account_id}', 'API\OrderController@index');
    Route::get('orders/{account_id}/{id}', 'API\OrderController@show');
    Route::get('featured/{account_id}/{id}', 'API\ProductController@toggleFeatured');
    Route::get('stock/{account_id}/{id}', 'API\ProductController@toggleOutStock');
});
