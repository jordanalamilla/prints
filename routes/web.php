<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# AUTHENTICATION ROUTE RESOURCE
Auth::routes();

# SITE INDEX
Route::get( '/', 'ProjectsController@index' );

# ABOUT PAGE
Route::get( '/about', 'PagesController@about' );

# PROJECTS ROUTE RESOURCE
Route::resource( 'projects', 'ProjectsController' );

# CONTACT FORM
Route::get( '/contact', 'PagesController@contact' );

# DASHBOARD INDEX
Route::get( '/dash', 'DashboardController@index' );

# MAIL ROUTE
Route::post( '/contact/send', 'MailController@send' );