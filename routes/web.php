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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\Auth\LoginController@index');
Route::get('/students', 'StudentController@index')->name('/students');
Route::get('/students/add', 'StudentController@add')->name('/students/add');
Route::get('/students/edit/{id}', 'StudentController@edit');

Auth::routes();


