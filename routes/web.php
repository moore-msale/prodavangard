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
//     // return view('welcome');
// });

Route::get('/','ProductController@index')->name('index');
Route::get('/about','ProductController@about')->name('about');
Route::get('/viewProduct/{id}','ProductController@viewProduct')->name('viewProduct');
Route::get('/coop/','ProductController@coop')->name('coop');
Route::post('/search/','ProductController@search')->name('search');

// Route::get('/viewCatalog/{id}','CatalogController@viewCatalog')->name('viewCatalog');
Route::get('/viewCatalogAll','CategoryController@viewAll')->name('viewCatalogAll');
Route::get('/viewCategory/{id}','CategoryController@viewCategory')->name('viewCategory');
Route::get('/viewPart/','ProductController@part')->name('part');

Route::get('/viewSubCategory/{id}','CategoryController@viewSubCategory')->name('viewSubCategory');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
