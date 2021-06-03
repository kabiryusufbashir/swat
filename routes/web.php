<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FlutterwaveController;

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

// route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');