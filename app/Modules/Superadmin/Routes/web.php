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
// Agent Account
Route::group(['prefix' => 'agent/account'], function(){
	Route::get('/', 'AgentAccount\WebController@index')->name('agent_account');
	Route::get('/create', 'AgentAccount\WebController@create')->name('agent_account_create');
	Route::post('/store', 'AgentAccount\WebController@store')->name('agent_account_store');
	Route::get('/edit/{id}', 'AgentAccount\WebController@edit')->name('agent_account_edit');
	Route::get('/show/{id}', 'AgentAccount\WebController@show')->name('agent_account_show');
	Route::post('/update/{id}', 'AgentAccount\WebController@update')->name('agent_account_update');
	Route::get('/delete/{id}', 'AgentAccount\WebController@delete')->name('agent_account_delete');
});

//Phase
Route::group(['prefix' => 'phase'], function(){
	Route::get('/', 'Phase\WebController@index')->name('phase');
	Route::get('/create', 'Phase\WebController@create')->name('phase_create');
	Route::post('/store', 'Phase\WebController@store')->name('phase_store');
	Route::get('/edit/{id}', 'Phase\WebController@edit')->name('phase_edit');
	Route::get('/show/{id}', 'Phase\WebController@show')->name('phase_show');
	Route::post('/update/{id}', 'Phase\WebController@update')->name('phase_update');
	Route::get('/delete/{id}', 'Phase\WebController@delete')->name('phase_delete');
});


//Block time
Route::group(['prefix' => 'block/time'], function(){
	Route::get('/', 'BlockTime\WebController@index')->name('block_time');
	Route::get('/create', 'BlockTime\WebController@create')->name('block_time_create');
	Route::post('/store', 'BlockTime\WebController@store')->name('block_time_store');
	Route::get('/edit/{id}', 'BlockTime\WebController@edit')->name('block_time_edit');
	Route::get('/show/{id}', 'BlockTime\WebController@show')->name('block_time_show');
	Route::post('/update/{id}', 'BlockTime\WebController@update')->name('block_time_update');
	Route::get('/delete/{id}', 'BlockTime\WebController@delete')->name('block_time_delete');
	Route::get('/checktime', 'BlockTime\WebController@checktime')->name('block_time_check');
});

//Report
Route::group(['prefix' => 'report'], function(){
	Route::get('/', 'Report\WebController@index')->name('report');
	Route::get('/create', 'Report\WebController@create')->name('report_create');
	Route::post('/store', 'Report\WebController@store')->name('report_store');
	Route::get('/edit/{id}', 'Report\WebController@edit')->name('report_edit');
	Route::get('/show/{id}', 'Report\WebController@show')->name('report_show');
	Route::post('/update', 'Report\WebController@update')->name('report_update');
	Route::get('/delete/{id}', 'Report\WebController@delete')->name('report_delete');
});


Route::group(['prefix' => 'meeting'], function(){
    Route::get('/', 'MeetingView\WebController@index')->name('meeting');
    Route::post('/search', 'MeetingView\WebController@search')->name('search');

});

Route::group(['prefix' => 'meeting'], function(){
    Route::get('/details/{id}', 'MeetingView\WebController@details')->name('details');

});

Route::group(['prefix' => 'dashboard'], function(){

    Route::get('/supperadmin', 'Dashboard\WebController@supperadmin')->name('supperadmin');
    Route::get('/agent', 'Dashboard\WebController@agent')->name('agent');
    Route::post('/agent/search', 'Dashboard\WebController@agentsearch')->name('agentsearch');
    Route::post('/superadmin/search', 'Dashboard\WebController@superAdminSearch')->name('super');

});
Route::get('/', 'Dashboard\WebController@supperadmin')->name('home');
Route::get('/logout', 'Dashboard\WebController@getlogout')->name('logout');
