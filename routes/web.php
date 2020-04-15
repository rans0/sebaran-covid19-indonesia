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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/bckp', 'bckp');
Route::view('/index', 'index');
// Route::view('/table-indonesia', 'table-indonesia');
// Route::view('/graph', 'graph');
Route::view('/pencegahan', 'pencegahan');

Route::get('/','ApiController@SebaranCovid');
Route::get('/table-indonesia','ApiController@SebaranIndo');
Route::get('/table-internasional','ApiController@SebaranGLobal');
Route::get('/graph','ApiController@showchart');

