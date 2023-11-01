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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

// ganti pake controller
Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/packaging', function () {
    return view('packaging');
});

Route::get('/production', function () {
    return view('production');
});

Route::get('/howtoorder', function () {
    return view('howtoorder');
});
