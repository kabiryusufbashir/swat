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
    return view('welcome');
})->name('homepage');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/aims', function () {
    return view('aims');
})->name('aims');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/pay', function () {
    return view('pay');
})->name('pay');
