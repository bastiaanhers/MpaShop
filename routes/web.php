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


Route::get('add-to-cart/{id}', 'ProductController@addToCart');

    // Route::get('add-to-cart/{$id}', [
    //     'uses' => 'ProductController@addToCart',
    //     'as' => 'product.addToCart'
    // ]);

    Route::get('cart/view',[
        'uses' => 'CartController@view',
        'as' => 'cart.view'
    ]);
    Route::get('cart/delete/{id}',[
        'uses' => 'cartController@DeleteItem',
        'as' => 'cart.del' 
    ]);

Route::group(['prefix'=>'user'],function(){

    Route::group(['middleware'=>'auth'], function(){
        Route::get('/page', [
            'uses' => 'userController@page',
            'as' => 'user.page'
        ]);

        Route::get('/logout', [
            'uses' => 'userController@logout',
            'as' => 'user.logout'
        ]);
    });

    Route::group(['middleware' => 'guest'], function(){
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
    });
});
