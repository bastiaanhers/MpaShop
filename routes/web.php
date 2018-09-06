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
Route::get('/', [
    'uses'=> 'HomeController@index',
    'as'=> 'home.index']
);

Route::get('/catagory/{id}', 'CatagoryController@index')
    ->name('catagory');

Route::get('/product/{id}', 'ProductController@index')
    ->name('Product');

Route::get('/register', [
    'as' => 'user.getRegister',
    'uses' =>'userController@getRegister'
    ]);
Route::post('/register', [
    'uses' => 'userController@postRegister',
    'as' => 'user.postRegister'
    ]);