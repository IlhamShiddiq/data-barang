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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});