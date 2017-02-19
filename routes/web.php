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

Route::get('')->uses('CouponController@index')->name('home');
Route::get('create')->uses('CouponController@create')->name('coupon.create');
Route::post('store')->uses('CouponController@store')->name('coupon.store');
Route::get('edit/{coupon}')->uses('CouponController@edit')->name('coupon.edit');
Route::post('update/{coupon}')->uses('CouponController@update')->name('coupon.update');
Route::get('destroy/{coupon}')->uses('CouponController@destroy')->name('coupon.destroy');
