<?php

Route::get('/profile', array(
    'before' => 'auth',
    'as' => 'profile',
    'uses' => 'UsersController@profile',
));

Route::get('/settings', array(
    'before' => 'auth',
    'as' => 'settings',
    'uses' => 'UsersController@settings',
));

Route::get('/contact-list', array(
    'before' => 'auth',
    'as' => 'contacts',
    'uses' => 'UsersController@contactList',
));

Route::get('/contact-delete/{id}', array(
    'before' => 'auth',
    'as' => 'contact-delete',
    'uses' => 'UsersController@contactDelete',
))->where(array('id' => '[0-9]+'));


Route::get('/set-language/{lang}', array(
    'as' => 'set-language',
    'uses' => 'UsersController@setLanguage',
))->where(array('lang' => '[a-zA-Z0-9]+'));