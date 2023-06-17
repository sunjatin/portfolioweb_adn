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
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "Name" => "Tiger Vixion",
        "Position" => "Teknik gambar bangunan",
        "Office" => "Edinburg",
        "Age" => "61",
        "Start_date" => "2011/04/25",
        "Salary" => "$320,800"
    ]);
});

Route::get('/home', function () {
    return ('This page is under Maintenance !');
});

Route::get('/about', function () {
    return ('This page is under Maintenance !');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/password', function () {
    return view('password');
});


