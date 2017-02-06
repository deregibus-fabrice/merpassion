<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Site
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('contact', function()
{
    return View::make('layouts.contact');
});
Route::get('language/{lang}', 'LanguageController@show')->where('lang', implode('|', config('app.languages')));


// Administration
Route::get('administration', function()
{
    return View::make('administration.home');
});

Route::resource('administration/rents', 'RentController');
