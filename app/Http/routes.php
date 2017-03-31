<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

$api = app('Dingo\Api\Routing\Router');
//共有接口不需要登录
$api->version('v1', function ($api) {
	// 用户登录验证并返回 Token
    $api->post('/auth/login', 'App\Http\Controllers\Api\V1\AuthenticateController@smsLogin');
    // 发送验证码
	
});


//私有接口需要登录
$api->version('v1', ['middleware' => 'jwt.auth'], function ($api) {
	//返回用户信息
    $api->post('/auth/me', 'App\Http\Controllers\Api\V1\AuthenticateController@myinfo');

  

});