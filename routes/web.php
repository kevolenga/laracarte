<?php

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('Kevin Olenga', 'kevolenga@gmail.com', 'Merci pour laracarte');
});

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'ContactController@create'
]);

Route::post('/contact', [
    'as' => 'contact',
    'uses' => 'ContactController@store'
]);