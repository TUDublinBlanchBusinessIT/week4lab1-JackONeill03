<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});    

Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');

Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customers/update', 'App\Http\Controllers\CustomerController@update');