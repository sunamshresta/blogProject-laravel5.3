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
//     return view('frontend.master');
// });

Route::get('/','frontendController@index')->name('Home');
Route::get('/about','frontendController@about')->name('About');
Route::get('/gallary','frontendController@gallary')->name('Gallary');
Route::get('/contact','frontendController@contact')->name('Contact');

Route::group(['middleware'=>['auth']],function(){


	Route::get('/admin','backendController@dashboard')->name('Dashboard');

	Route::get('/admin/author','AuthorController@author')->name('Author');
	Route::get('/admin/addauthor','AuthorController@addauthor')->name('addAuthor');
	Route::post('/admin/addaction','AuthorController@addaction')->name('addAction');
	Route::get('/admin/editauthor/{id}','AuthorController@edit')->name('editAuthor');
	Route::post('/admin/editaction','AuthorController@updateaction')->name('editAction');
	Route::post('/admin/delete/{id}','AuthorController@delete')->name('deleteAuthor');


	Route::get('/admin/gallary','ImageController@index')->name('Gallary');
	Route::get('/admin/addimage','ImageController@addimage')->name('addImage');
	Route::post('/admin/imageaction','ImageController@store')->name('imageAction');

	Route::get('/admin/editimg/{id}','ImageController@editimg')->name('editImage');
	Route::post('/admin/update','ImageController@update')->name('updateImage');
	//Route::post('/admin/imgdedel','ImageController@delete')->name('imagedel')

	Route::resource('/admin/posts','PostController');
	
});

Route::get('/login','AdminController@login')->name('Login');
Route::post('/loginaction','AdminController@loginaction')->name('loginAction');
Route::post('/logoutaction','AdminController@logout')->name('Logout');

