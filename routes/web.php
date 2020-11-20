<?php

use App\Http\Controllers\MyUserController;
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
    return view('index');
});


Route::get('about', 'App\Http\Controllers\MyController@menu');

Route::get('donate-list', 'App\Http\Controllers\MyController@donate_list');

Route::get('contactus', 'App\Http\Controllers\MyController@contact_us');

Route::get('CharityName', 'App\Http\Controllers\MyController@CharityName');
