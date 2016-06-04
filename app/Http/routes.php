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

Route::get('/', function () {
    // do testing stuff in here?
    return view('index');
});

/*
 * The Routes for all our Blog pages.
 */
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@single');

/*
 * Our Static pages
 */
Route::get('/about', 'BlogController@about');
Route::get('/contact', 'BlogController@contact');

