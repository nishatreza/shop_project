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

Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');

Auth::routes();
Route::get('/home', 'HomeController@index');

/*Category Info*/
Route::get('/add-category', 'CategoryController@createCategory');
Route::post('/new-category', 'CategoryController@storeCategory');
Route::get('/manage-category', 'CategoryController@showCategory');
Route::get('/edit-category/{id}', 'CategoryController@editCategory');
Route::post('/update-category', 'CategoryController@updateCategory');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');
/*Category Info*/

Route::get('/add-manufacturer', 'ManufacturerController@createManufacturer');


