<?php

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

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::resource('/subjects','SubjectController' );

Route::get('/', 'SubjectController@index'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/requets', 'RequetsController');
