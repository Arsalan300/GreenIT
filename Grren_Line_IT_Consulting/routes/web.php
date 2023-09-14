<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

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
    return view('index');
})->name('index');

Route::get('/enterprise-software-development', function () {
    return view('enterprise');
});

Route::get('/Mobile-App-Development-Services', function () {
    return view('mobileApp');
});

Route::get('/Dedicated-Development-Team', function () {
    return view('dedicated');
});

Route::get('/Internet-Of-Thing', function () {
    return view('internet');
});

Route::get('/BlockChain', function () {
    return view('blockchain');
});

Route::get('/Customer-Experiance', function () {
    return view('customer');
});

Route::get('/Construction--Software-Development', function () {
    return view('constraction');
});


Route::get('/healthcare-it-solutions', function () {
    return view('health');
});


Route::get('/dental-software-development', function () {
    return view('dental');
});


Route::get('/About', function () {
    return view('about');
});

Route::get('/Team', function () {
    return view('team');
});

Route::get('/Contact-Us', function () {
    return view('contact');
});

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thank');


Route::post('/send-message',[contactController::class,'send']);