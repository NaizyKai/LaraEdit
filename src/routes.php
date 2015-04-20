<?php

Route::group(array('prefix' => '/laraedit'), function()
{
	Route::get('/', 'LaraEdit\LaraEdit\Controllers\PagesController@getIndex');
});