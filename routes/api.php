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
