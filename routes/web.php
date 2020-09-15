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

Route::get('/', function () {
    return view('operasi');
});

// Route::get('/kalkulator', function () {
//     return view('operasi');
// });

// Route::post('/kalkulator', 'KalkulatorController@calculate');
Route::post('/hitungtabung', 'KalkulatorController@calculate_tabung');

Route::post('/hitungbola', 'KalkulatorController@calculate_bola');

Route::post('/hitungkerucut', 'KalkulatorController@calculate_kerucut');


