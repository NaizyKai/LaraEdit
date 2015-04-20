<?php
Route::group(array('prefix' => Config::get('laraedit::laraedit.uri')), function()
{
	Route::get('/', 'LaraEdit\LaraEdit\PagesController@getIndex');
});