<?php

Route::group(['prefix' => '/laraedit'], function()
{
    Route::get('/', 'LaraEdit\LaraEdit\Controllers\PageController@getIndex');
});
