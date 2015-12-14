<?php

/**
 * Frontend Controllers
 */
get('/', 'FrontendController@index')->name('home');
get('macros', 'FrontendController@macros');

/**
 * These frontend controllers require the user to be logged in
 */
$router->group(['middleware' => 'auth'], function ()
{
    get('flats/{id}/meters', 'FlatsController@meters');
    get('flats/{id}/meters/add', 'FlatsController@addMeter');
    resource('flats', 'FlatsController', ['middleware' => 'osbb']);
    get('meters/{id}/measurements', 'MetersController@measurements');
    get('meters/{id}/measurements/add', 'MetersController@addMeasurement');
    post('meters/{id}/measurements/add', 'MetersController@storeMeasurement');
    resource('meters', 'MetersController');
	get('dashboard', 'DashboardController@index')->name('frontend.dashboard');
	get('profile/edit', 'ProfileController@edit')->name('frontend.profile.edit');
	patch('profile/update', 'ProfileController@update')->name('frontend.profile.update');
});