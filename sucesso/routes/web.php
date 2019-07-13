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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'ProductsController@index');
Route::get('/products/relatorio', 'ProductsController@relatorio')->name('products.relatorio');
//Route::get('/home', 'PaginasController@home');
Route::resource('/products','ProductsController');
Route::resource('/brands','BrandsController');
Route::resource('/categories','CategoriesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
