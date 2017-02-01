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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', ['as' => 'home', function()
{
    return "Je suis la page d\'accueil";
}]);

Route::get('/contact', function()
{
    return "Je suis la page de contact";
});
*/

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
