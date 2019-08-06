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


Auth::routes();
Route::view('/','welcome')->name('welcome');
Route::view('about','about')->name('about');

//Customers
Route::get('/customers','CustomersController@index')->name('customers.index');
Route::get('/customers/create','CustomersController@create')->name('customers.create');
Route::post('/customers','CustomersController@store')->name('customers.store');
Route::get('/customers/{customer}','CustomersController@show')->name('customers.show');
Route::get('/customers/{customer}/edit','CustomersController@edit')->name('customers.edit');
Route::patch('/customers/{customer}','CustomersController@update')->name('customers.update');
Route::delete('/customers/{customer}','CustomersController@destroy')->name('customers.destroy');
/*
Route::resource('customers','CustomersController');*/

//contacts
Route::get('/contact','ContactsController@create')->name('contact.create');;
Route::post('/contact','ContactsController@store')->name('contact.store');

//Reports

Route::resource('/reports','ReportController');

//User
Route::get('/home','HomeController@index')->name('home');
Route::get('/users','HomeController@users')->name('users');
Route::delete('/home/{user}','HomeController@destroy')->name('deleteUser');
Route::get('/home/{user}','HomeController@show')->name('usersReports');



