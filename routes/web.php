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


//register page routes
Route::get('/register', [
    'as' => 'user.getRegister',
    'uses' =>'userController@getRegister'
]);

Route::post('/register', [
    'uses' => 'userController@postRegister',
    'as' => 'user.postRegister'
]);

//login page routes
Route::get('/login', [
    'as' => 'user.getLogin',
    'uses' =>'userController@getLogin'
]);

Route::post('/login', [
    'uses' => 'userController@postLogin',
    'as' => 'user.postLogin'
]);

Route::get('/user/page', [
    'uses' => 'userController@page',
    'as' => 'user.page'
]);