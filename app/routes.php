<?php

/*
|--------------------------------------------------------------------------
| Basic Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'PagesController@index');

/*
|--------------------------------------------------------------------------
| clerk/ Prefixed Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'clerk'], function()
{
	Route::get('/', 'ClerkController@index');
	Route::get('contact_us', 'ClerkController@contact_us');
	Route::get('clerk', 'ClerkController@clerk');
});

/*
|--------------------------------------------------------------------------
| court/ Prefixed Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'court'], function()
{
	Route::get('/', 'CourtController@index');
	Route::get('contact_us', 'CourtController@contact_us');
	Route::get('judges', 'CourtController@judges');
	Route::get('judges/{name}', 'CourtController@showJudge');
	Route::get('local_rules', 'CourtController@localRules');
});
