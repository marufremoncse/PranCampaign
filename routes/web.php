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
    Route::group(['middleware'=>'auth'],function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('click/day-wise-click', 'ClickController@day_wise_click')->name('day-wise-click');
    Route::get('click/click-details', 'ClickController@click_details')->name('click-details');
    Route::get('click/day-wise-click-details/{date}', 'ClickController@day_wise_click_details')->name('day-wise-click-details');
});
