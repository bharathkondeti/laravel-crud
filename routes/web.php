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

Route::get('/hello', function () {
    return 'Hello World!!!';
});

Route::get('/welcome', 'WelcomeContoller@index');

//Passing Variables
Route::get('/var/{id}', function($id) {
    return $id;
});

//Naming routes
Route::get('/test/test1/test2/test3', function () {
  return route('test.show');
})->name('test.show');
