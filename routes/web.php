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


Route::get('/', [\App\Http\Controllers\Guest\GuestController::class, 'index']);
Route::get('/all-categories', [\App\Http\Controllers\Guest\GuestController::class, 'index']);
Route::get('/projects/add', [\App\Http\Controllers\Projects\ProjectController::class, 'add']);
Route::get('/listing/{slug}', [\App\Http\Controllers\Projects\ProjectController::class, 'singleProject']);
Route::get('/projects/autocomplete', [\App\Http\Controllers\Projects\ProjectController::class, 'searchAutoComplete'])->name('autocomplete');
Route::get('/listings/search', [\App\Http\Controllers\Projects\ProjectController::class, 'search']);
Route::get('/world-map', [\App\Http\Controllers\Guest\GuestController::class, 'worldMap']);

Route::get('/tech', [\App\Http\Controllers\Category\ParentCategoryController::class, 'theTech']);
Route::get('/people', [\App\Http\Controllers\Category\ParentCategoryController::class, 'thePeople']);
Route::get('/adjacent', [\App\Http\Controllers\Category\ParentCategoryController::class, 'adjacent']);

Route::get('/listing-categories', [\App\Http\Controllers\Category\CategoryHierarchy::class, 'getCategoryHierarchy']);
Route::get('/listing-category/{slug}', [\App\Http\Controllers\Category\ProjectController::class, 'getProjectsByCategory']);

Route::get('/listing-tag/{name}', [\App\Http\Controllers\Category\ProjectController::class, 'getProjectsByTag']);

Route::get('/tags', [\App\Http\Controllers\Category\ProjectController::class, 'tagsTable']);

Route::get('/log-search', [\App\Http\Controllers\Projects\SearchController::class, 'log']);
Route::get('/search-log', [\App\Http\Controllers\Projects\SearchController::class, 'getLog']);

/**
 * Process listing contact form
 * 
 */
Route::post('/listing-contact-form', [\App\Http\Controllers\Projects\ListingContactForm::class, 'processForm']);



Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about']);



Route::get('/sync/manual', [\App\Http\Controllers\Airtable\ImportsController::class, 'manualSync']);
Route::get('/sync/manual/links', [\App\Http\Controllers\Airtable\Sync\LinkController::class, 'syncLinks']);
Route::get('/a/test', [\App\Http\Controllers\Airtable\ImportsController::class, 'test']);
Route::get('/t', [\App\Http\Controllers\TestController::class, 'test']);
Route::get('/fill', [\App\Http\Controllers\TestController::class, 'fillCoverImages']);

Route::get('/email-templates/contact-form', [\App\Http\Controllers\TestController::class, 'contactFormTemplate']);


