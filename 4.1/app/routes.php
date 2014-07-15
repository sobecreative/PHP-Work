<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

Route::get('/login', array(
	'as' => 'login',
	'uses' => 'LoginController@login'
));

Route::get('/signup', array(
	'as' => 'signup',
	'uses' => 'SignupController@signup'
));
