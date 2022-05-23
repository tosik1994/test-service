<?php

use App\Admin\Controllers\AdvantageController;
use App\Admin\Controllers\ContactEmailController;
use App\Admin\Controllers\LocationController;
use App\Admin\Controllers\OperatorController;
use App\Admin\Controllers\OrderController;
use App\Admin\Controllers\PhoneTypeController;
use App\Admin\Controllers\PhonesController;
use App\Admin\Controllers\ServiceController;
use App\Admin\Controllers\SocialNetworkController;
use App\Admin\Controllers\TypeServiceController;
use App\Admin\Controllers\WhatWeDoController;
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
    $router->resource('social-networks', SocialNetworkController::class);
    $router->resource('advantages', AdvantageController::class);
    $router->resource('contact-emails', ContactEmailController::class);
    $router->resource('locations', LocationController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('type-services', TypeServiceController::class);
    $router->resource('what-we-do', WhatWeDoController::class);


});
