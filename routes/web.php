<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.pages.landing-page');
});

Route::get('item-list', function () {
    return view('site.pages.item-list');
});

Route::get('item-detail', function () {
    return view('site.pages.items-detail');
});

Route::get('checkout-order', function () {
    return view('site.pages.checkout-order');
});

Route::get('checkout-confirm', function () {
    return view('site.pages.checkout-confirm');
});
