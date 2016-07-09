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

Route::get('/', 'BlogController@index');

/*
 * Our Static pages
 */
Route::get('/about', 'BlogController@about');
Route::get('/contact', 'BlogController@contact');

/*
 * The Routes for all our Blog pages.
 * Note that this is placed after our /about and /contact
 * routes to avoid conflict
 */
Route::get('/{slug}', 'BlogController@single');