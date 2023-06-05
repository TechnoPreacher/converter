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

	Auth::routes();

	Route::get('/', [\App\Http\Controllers\ApiController::class, 'index']);
	Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);//->name('home');

	Route::resource('titlesets', \App\Http\Controllers\TitlesetController::class);
	Route::resource('menusets', \App\Http\Controllers\MenusetController::class);
	Route::resource('mainpagesets', \App\Http\Controllers\MainpagesetController::class);