<?php

/*
|--------------------------------------------------------------------------
| Basic Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'PagesController@index');

Route::get('clerk', 'ClerkController@clerk');
