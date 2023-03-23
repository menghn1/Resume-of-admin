<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
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
Route::group([],function (Router $router) {
    $router->post('self_info', 'AllController@self_info');
    $router->post('work_list', 'AllController@work_list');
    $router->post('project_list', 'AllController@project_list');
    $router->post('skill_list', 'AllController@skill_list');
    $router->post('record_list', 'AllController@record_list');
    $router->post('record_add', 'AllController@record_add');
});
