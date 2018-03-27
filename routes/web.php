<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'ContactController@create'
]);