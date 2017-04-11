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
//获取api实例
$api = app('Dingo\Api\Routing\Router');


//共有接口不需要登录
$api->version('v1', function ($api) {
    //todo  添加共有接口
    $api->post('v1/ben', 'App\Http\Controllers\Api\V1\AuthenticateController@ben');
});

//私有接口需要登录
$api->version('v1', ['middleware' => 'jwt.auth'], function ($api) {
    //todo  添加私有接口
});