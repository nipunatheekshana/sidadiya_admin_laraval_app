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

// Login
Route::get('/login','logincontroller@login');

// Admin panel
Route::get('/','admincontroller@admin');

// Admin wall
Route::get('/wall','admincontroller@adminwall');

// Admin withdrawal
Route::get('/withdrawals','admincontroller@adminwithdrawal');

// Admin notification
Route::get('/notification','admincontroller@adminnotification');

// Admin users
Route::get('/users','admincontroller@users');
