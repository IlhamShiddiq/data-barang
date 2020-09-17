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


// Route::group(['middleware' => 'prevent-back-history'],function(){
//   Auth::routes();
//   Route::get('/home', 'HomeController@index');
// });

// Login
Route::get('/', 'LoginPageController@index');
Route::get('/login', 'LoginPageController@index');
Route::post('/login', 'LoginPageController@login');

// Dashboard
Route::get('/home', 'DashboardController@index');

// Data Barang
Route::get('/data', 'DataBarangController@index');
Route::get('/add', 'DataBarangController@create');
Route::get('/edit', 'DataBarangController@edit');

// Data Pegawai yang sedang login
Route::get('/myprofile', 'PegawaiLoginController@edit');
Route::get('/changepassword', 'PegawaiLoginController@editPassword');

// Static Page
Route::get('/about', 'StaticPageController@about');