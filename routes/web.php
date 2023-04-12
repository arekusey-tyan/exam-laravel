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
    return redirect('/instruction');
});

Route::get('instruction/search', '\App\Http\Controllers\InstructionController@search');
Route::get('user/logout', '\App\Http\Controllers\UserController@logout');
Route::get('user/login', '\App\Http\Controllers\UserController@login');
Route::get('admin', '\App\Http\Controllers\AdminController@index');
Route::post('user/login', '\App\Http\Controllers\UserController@loginHandler');
Route::resource('instruction', \App\Http\Controllers\InstructionController::class);
Route::resource('claim', \App\Http\Controllers\ClaimController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);