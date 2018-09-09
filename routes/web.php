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

# SITE INDEX
Route::get( '/', 'ProjectsController@index' );

# DASHBOARD INDEX
Route::get( '/dashboard', 'DashboardController@index' );

# PROJECTS ROUTE RESOURCE
Route::resource( 'projects', 'ProjectsController' );

# AUTHENTICATION ROUTE RESOURCE
Auth::routes();

# CONTACT FORM
Route::get( '/contact', 'PagesController@contact' );

# ABOUT PAGE
Route::get( '/about', 'PagesController@about' );

# MAIL ROUTE
Route::post( '/contact/send', 'MailController@send' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
