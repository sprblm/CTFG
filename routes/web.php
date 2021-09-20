<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Guest\GuestController@index');
Route::get('/all-categories', 'Guest\GuestController@index');
Route::get('/projects/add', 'Projects\ProjectController@add');
Route::get('/listing/{slug}', 'Projects\ProjectController@singleProject');
Route::get('/projects/autocomplete', 'Projects\ProjectController@searchAutoComplete')->name('autocomplete');
Route::get('/listings/search', 'Projects\ProjectController@search');
Route::get('/world-map', 'Guest\GuestController@worldMap');

Route::get('/category/parent/the-tech', 'Category\ParentCategoryController@theTech');
Route::get('/category/parent/the-people', 'Category\ParentCategoryController@thePeople');

Route::get('/listing-categories', 'Category\CategoryHierarchy@getCategoryHierarchy');
Route::get('/listing-category/{slug}', 'Category\ProjectController@getProjectsByCategory');

Route::get('/listing-tag/{name}', 'Category\ProjectController@getProjectsByTag');

Route::get('/about', 'PagesController@about');

Route::get('/sync/manual', 'Airtable\ImportsController@manualSync');
Route::get('/a/test', 'Airtable\ImportsController@test');
Route::get('/t', 'TestController@test');



