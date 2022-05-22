<?php

use App\Admin\Controllers\OperatorController;
use App\Admin\Controllers\OrderController;
use App\Admin\Controllers\PhoneTypeController;
use App\Admin\Controllers\PhonesController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('operators', OperatorController::class);
    $router->resource('phone-types', PhoneTypeController::class);
    $router->resource('phones', PhonesController::class);
    $router->resource('orders', OrderController::class);

});
