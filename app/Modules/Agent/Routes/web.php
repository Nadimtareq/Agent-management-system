<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Entry 
Route::group(['prefix' => 'entry'], function(){
	Route::get('/', 'Entry\WebController@index')->name('entry');
	Route::get('/create', 'Entry\WebController@create')->name('entry_create');
	Route::post('/store', 'Entry\WebController@store')->name('entry_store');
	Route::get('/edit/{id}', 'Entry\WebController@edit')->name('entry_edit');
	Route::get('/show/{id}', 'Entry\WebController@show')->name('entry_show');
	Route::post('/update', 'Entry\WebController@update')->name('entry_update');
	Route::get('/delete/{id}', 'Entry\WebController@delete')->name('entry_delete');
});

// Activity
Route::group(['prefix' => 'activity'], function(){
	Route::get('/', 'Activity\WebController@index')->name('activity');
	Route::get('/create', 'Activity\WebController@create')->name('activity_create');
	Route::post('/store', 'Activity\WebController@store')->name('activity_store');
	Route::get('/edit/{id}', 'Activity\WebController@edit')->name('activity_edit');
	Route::get('/show/{id}', 'Activity\WebController@show')->name('activity_show');
	Route::post('/update', 'Activity\WebController@update')->name('activity_update');
	Route::get('/delete/{id}', 'Activity\WebController@delete')->name('activity_delete');
});

//convertcustomer
Route::group(['prefix' => 'convert/customer'], function(){
	Route::get('/', 'ConvertCustomer\WebController@index')->name('convert_customer');
	Route::get('/create', 'ConvertCustomer\WebController@create')->name('convert_customer_create');
	Route::post('/store', 'ConvertCustomer\WebController@store')->name('convert_customer_store');
	Route::get('/edit/{id}', 'ConvertCustomer\WebController@edit')->name('convert_customer_edit');
	Route::get('/show/{id}', 'ConvertCustomer\WebController@show')->name('convert_customer_show');
	Route::post('/update', 'ConvertCustomer\WebController@update')->name('convert_customer_update');
	Route::get('/delete/{id}', 'ConvertCustomer\WebController@delete')->name('convert_customer_delete');
});

//prospect
Route::group(['prefix' => 'prospect'], function(){
	Route::get('/', 'Prospect\WebController@index')->name('prospect');
	Route::get('/create', 'Prospect\WebController@create')->name('prospect_create');
	Route::post('/store', 'Prospect\WebController@store')->name('prospect_store');
	Route::get('/edit/{id}', 'Prospect\WebController@edit')->name('prospect_edit');
	Route::get('/show/{id}', 'Prospect\WebController@show')->name('prospect_show');
	Route::post('/update/{id}', 'Prospect\WebController@update')->name('prospect_update');
	Route::get('/delete/{id}', 'Prospect\WebController@delete')->name('prospect_delete');
});

Route::group(['prefix' => 'activity'], function(){

    Route::get('/edit/{id}', 'Activity\WebController@edit')->name('remarks.edit');
    Route::post('/update/{id}', 'Activity\WebController@update')->name('activity_update');
    Route::post('/delete/{id}', 'Activity\WebController@delete')->name('activity_delete');

});


