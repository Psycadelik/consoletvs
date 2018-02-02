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

Route::get('/','ChartController@bar');
Route::get('/pie', 'ChartController@pie');
Route::get('/donut', 'ChartController@donut');
Route::get('/line', 'ChartController@line');
Route::get('/area', 'ChartController@area');
Route::get('/areaspline', 'ChartController@spline');
Route::get('geo', 'ChartController@geo');
Route::get('percent', 'ChartController@percentage');
Route::get('gauge', 'ChartController@gauge');
