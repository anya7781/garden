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

Route::get('/', 'MainController@getInfoForMainPage');

Route::any('/pricelist', 'MainController@getPricelist');

Route::get('/admin', function(){
    return view('empty');
});

Route::get('/admin-panel', 'AdminController@showMainPage');

Route::post('/change-header', 'AdminController@changeHeader');

Route::post('/change-author', 'AdminController@changeAuthor');

Route::post('/del_photo', 'AdminController@delPhoto');



