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

Route::get('/', function () {
    return view('welcome');
});

// Detect max size for the database tables fields
Route::prefix('max-size-detect')->group(function () {
    // Crops
    Route::get('crops', 'MaxSizeDetectController@crops');
    Route::get('crops/categories', 'MaxSizeDetectController@cropsCategories');
    // Payment
    Route::get('payment/forms', 'MaxSizeDetectController@paymentForms');
    Route::get('payment/methods', 'MaxSizeDetectController@paymentMethods');
});