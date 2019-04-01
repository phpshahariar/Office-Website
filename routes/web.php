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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Start Logo Controller

Route::get('/logo', 'LogoController@insert_logo');
Route::post('/upload-logo', 'LogoController@save_logo');
Route::get('/published-logo/{id}', 'LogoController@published_logo');
Route::get('/unpublished-logo/{id}', 'LogoController@unpublished_logo');
Route::get('/edit-logo/{id}', 'LogoController@edit_logo');
Route::post('/update-logo', 'LogoController@update_logo');
Route::get('/delete-logo/{id}', 'LogoController@delete_logo');

//End Logo Controller

Route::get('/team', 'TeamController@insert_team_member');
Route::post('/upload-team', 'TeamController@save_team_info');
Route::get('/published-team/{id}', 'TeamController@published_team_info');
Route::get('/unpublished-team/{id}', 'TeamController@unpublished_team_info');
Route::get('/edit-team/{id}', 'TeamController@edit_team_info');
Route::post('/update-team', 'TeamController@update_team_info');
Route::get('/delete-team/{id}', 'TeamController@delete_team_info');



Route::get('/about', 'TeamController@about_info');
Route::post('/about-info', 'TeamController@save_about');
Route::get('/published-about/{id}', 'TeamController@published_about');
Route::get('/unpublished-about/{id}', 'TeamController@unpublished_about');
Route::get('/edit-about/{id}', 'TeamController@edit_about');
Route::post('/update-about', 'TeamController@update_about');
Route::get('/delete-about/{id}', 'TeamController@delete_about');



Route::get('/our-work', 'WorkController@work_index');
Route::post('/upload-work', 'WorkController@work_save');
Route::get('/published-work/{id}', 'WorkController@work_published');
Route::get('/unpublished-work/{id}', 'WorkController@work_unpublished');
Route::get('/edit-work/{id}', 'WorkController@work_edit');
Route::post('/update-work', 'WorkController@update_work');
Route::get('/delete-work/{id}', 'WorkController@delete_work');


Route::get('/contact', 'WorkController@contact_us');
Route::post('/contact-save', 'WorkController@contact_save');