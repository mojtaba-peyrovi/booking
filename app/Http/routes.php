<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'pagesController@getHome',
    'as' => 'home',


]);

Route::get('/dashboard', [
    'uses' => 'pagesController@getbackend',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/properties', [
    'uses' => 'propertiesController@getIndex',
    'as' => 'properties.index',
    'middleware' => 'guest'
]);
Route::get('/properties/create' ,[
    'uses' => 'propertiesController@getCreate',
    'as' => 'properties.create',
    'middleware' => 'auth'
]);

Route::post('/properties',[
    'uses' => 'propertiesController@postProperties',
    'as' => 'properties.create',
    'middleware' => 'auth'
]);
Route::get('/properties/{property}', [
    'uses' => 'propertiesController@getShow',
    'as' => 'properties.show',
    'middleware' => 'guest'
]);

Route::get('/deals', [
    'uses' => 'dealsController@getIndex',
    'as' => 'deals.index',
    'middleware' => 'guest'
]);

Route::get('/deals/create', [
    'uses' => 'dealsController@getCreate',
    'as' => 'deals.create',
    'middleware' => 'auth'
]);

Route::post('/deals' ,[
    'uses' => 'dealsController@postCreate',
    'as' => 'deals.create',
    'middleware' => 'auth'
]);

Route::get('/deals/{deal}',[
    'uses' => 'dealsController@getShow',
    'as' => 'deals.show',
    'middleware' => 'guest'
]);


Route::get('/test', function(){
    return view('test');
});

Route::get('/admin/signup',[
    'uses' => 'usersController@getAdminSignup',
    'as' => 'admin.signup',
    'middleware' => 'guest'
]);

Route::post('/admin/signup',[
    'uses' => 'usersController@postAdminSignup',
    'as' => 'admin.signup',
    'middleware' => 'guest'
]);
Route::get('/admin/signin',[
    'uses' => 'usersController@getAdminSignin',
    'as' => 'admin.signin',
    'middleware' => 'guest'
]);

Route::post('/admin/signin',[
    'uses' => 'usersController@postAdminSignin',
    'as' => 'admin.signin',
    'middleware' => 'guest'
]);
Route::get('/admin/profile',[
    'uses' => 'usersController@getAdminProfile',
    'as' => 'admin.profile',
    'middleware' => 'auth'
]);

Route::get('/admin/logout',[
    'uses' => 'usersController@getAdminLogout',
    'as' => 'admin.logout',
    'middleware' => 'auth'
]);
