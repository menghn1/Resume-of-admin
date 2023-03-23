<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/work_experience', 'WorkExperienceController');
    $router->resource('/one_self', 'OneSelfController');
    $router->resource('/project', 'ProjectController');
    $router->resource('/skill', 'SkillController');
    $router->resource('/record', 'RecordController');
});
