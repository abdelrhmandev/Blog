<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//https://github.com/coreui/coreui-free-vue-laravel-admin-template/blob/master/laravel/routes/api.php
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

Route::apiResources(
	[
		'posts' => 'API\admin\PostController',
        'pages' => 'API\admin\PageController',
	]
);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
