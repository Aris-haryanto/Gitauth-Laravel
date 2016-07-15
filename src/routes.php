<?php

Route::group(['namespace' => 'Arisharyanto\gitauth\Controllers', 'prefix'=>'gitauth'], function() {
    Route::get('foo', 'GitauthController@foo');
});