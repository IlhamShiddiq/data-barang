<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistory;

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

// Login
Route::get('/', 'LoginPageController@index');
Route::get('/login', 'LoginPageController@index')->name('login');
Route::get('/logout', 'LoginPageController@logout');
Route::get('/noauth', 'LoginPageController@noauth')->name('noauth');
Route::post('/login', 'LoginPageController@login');

Route::group(['middleware' => ['auth']], function () {

   // Dashboard
    Route::get('/home', 'DashboardController@index')->middleware('auth');

    // Data Barang
    Route::get('/data', 'DataBarangController@index');
    Route::get('/add', 'DataBarangController@create');
    Route::get('/edit', 'DataBarangController@edit');
    Route::post('/search', 'DataBarangController@search');
    Route::post('/add', 'DataBarangController@store');

    // Data Pegawai yang sedang login
    Route::get('/myprofile', 'PegawaiLoginController@edit');
    Route::get('/changepassword', 'PegawaiLoginController@editPassword');

    // Static Page
    Route::get('/about', 'StaticPageController@about'); 

});