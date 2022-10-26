<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;



Route::get('/',HomeController::class)->name('home');

Route::controller(LoginController::class)->group(function(){
    Route::post('login','login')->name('login.login');
    Route::get('login','logout')->name('login.logout');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('dashboard','index')->name('dashboard.index');
});

Route::controller(OrderController::class)->group(function(){
    Route::get('orders','index')->name('orders.index');
    Route::get('orders/show','show')->name('orders.show');
    Route::get('orders/create','create')->name('orders.create');
    Route::post('orders','store')->name('orders.store');


});
