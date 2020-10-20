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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','EmployeeController@index')->name('showEmployee');
Route::get('/create-employee','EmployeeController@create')->name('createEmployee');
Route::post('/store-employee','EmployeeController@store')->name('storeEmployee');

Route::get('/details-employee/{slug}','EmployeeController@show')->name('detailsEmployee');

Route::get('/destroy-employee/{slug}','EmployeeController@destroy')->name('deleteEmployee');


Route::get('/edit-employee/{slug}','EmployeeController@edit')->name('editEmployee');
Route::post('/update-employee','EmployeeController@update')->name('updateEmployee');
