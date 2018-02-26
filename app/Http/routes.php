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
    'as' => 'home'
]);

Route::get('/properties', [
    'uses' => 'propertiesController@getIndex',
    'as' => 'properties.index'
]);
Route::get('/properties/create' ,[
    'uses' => 'propertiesController@getCreate',
    'as' => 'properties.create'
]);

Route::post('/properties',[
    'uses' => 'propertiesController@postProperties',
    'as' => 'properties.create'
]);
Route::get('/properties/{property}', [
    'uses' => 'propertiesController@getShow',
    'as' => 'properties.show'
]);

Route::get('/deals', [
    'uses' => 'dealsController@getIndex',
    'as' => 'deals.index'
]);

Route::get('/deals/create', [
    'uses' => 'dealsController@getCreate',
    'as' => 'deals.create'
]);

Route::post('/deals' ,[
    'uses' => 'dealsController@postCreate',
    'as' => 'deals.create'
]);


Route::get('/test', function(){
    return view('test');
});
