<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);
