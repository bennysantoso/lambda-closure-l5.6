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

Route::get('/lambdaone', 'LambdaController@showLambdaOne');
Route::get('/lambdatwo', 'LambdaController@showLambdaTwo');
Route::get('/closureone', 'ClosureController@showClosureOne');
