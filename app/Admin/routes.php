<?php

use Illuminate\Support\Facades\Route;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('cover-groups', CoverGroupController::class);
    $router->resource('covers', CoverController::class);
    $router->resource('addresses', AddressController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('formats', FormatController::class);
});
