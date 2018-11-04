<?php

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\Products as ProductsResource;
use App\Http\Resources\Product as ProductResource;

use App\Order;
use App\Http\Resources\Orders as OrdersResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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

Route::prefix('mobile')->group(function () {
    Route::get('hello', function () {
        return response()->json('helo');
    });

    Route::get('products/{account_id}', function ($account_id) {
        sleep(4);
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->get());
    });
    Route::get('product/{id}', function ($id) {
        sleep(4);
        return new ProductResource(Product::withoutGlobalScopes()->find($id));
    });

    Route::get('orders/{account_id}', function ($account_id) {
        sleep(4);
        return  OrdersResource::collection(Order::withoutGlobalScopes()->where('account_id', $account_id)->get());
    });
});
