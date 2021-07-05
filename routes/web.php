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
Route::get('/projects', 'Projects\ProjectController@index');
Route::get('/projects/add', 'Projects\ProjectController@add');
Route::get('/projects/single/{name}', 'Projects\ProjectController@singleProject');

Route::get('/category/parent/the-tech', 'Category\ParentCategoryController@theTech');
Route::get('/category/parent/the-people', 'Category\ParentCategoryController@thePeople');

Route::get('/category/projects/{name}', 'Category\ProjectController@getProjectsByCategory');

//Route::get('/a/test', 'Airtable\ImportsController@test');

Route::get('/t', 'TestController@test');



