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

Route::get('/','dbcon2@store');
Route::view('/index','index')->name('red1');
Route::view('/index2','index2');
Route::view('/telugu','telugu');
Route::view('/hindi','hindi');
Route::view('/english','english');
Route::view('/login','login');
Route::view('/signup','signup2');
Route::view('/setting','setting');
Route::view('/login','login');
Route::view('/success','success');
Route::post('/signup_vali','validations@valid');
Route::post('/login_submit','validations@login2');
Route::get('/logout','validations@logout');
Route::view('/book','book')->middleware('id');
Route::post('/book_vali','validations@pay1');
Route::view('/pay','pay')->name('red2');
Route::post('/pay_vali','validations@pay2');   
Route::post('/sscript','validations@sett');  
Route::post('/sscript2','validations@sett2');  