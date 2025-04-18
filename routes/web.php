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

Route::get('/about', function () { return view('about');});
Route::get('/', function () { return view('home');});
Route::get('/contact', function () { return view('contact');});
Route::get('/user/{id}/{name}', function ($id, $name) { return view('about');});
