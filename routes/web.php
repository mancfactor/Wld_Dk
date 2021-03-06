<?php

use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection as UserCollectionResource;

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
Route::get('/', 'ContestsController@index');
Route::get('/vote/{id}', 'VoteController@vote');
Route::get('/featured', 'ContestsController@featured');
Route::get('/product/{id}', 'ContestsController@product');
Route::get('/preview/{id}', 'ContestsController@preview');
Route::get('/enter-contest', 'ContestsController@enterContest')->name('home');
Route::get('/contest/add-entry', 'ContestsController@addEntry');
Route::get('/contest/entry/{id}', 'ContestsController@showEntry');
Route::get('/test', 'ContestsController@test');


Route::get('/account', function() {
    return redirect('/login');
});

Route::post('/contest/store-entries', 'ContestsController@storeEntries');
Route::get('/votep', 'EntryController@votep');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('adminhome');
Route::get('/entries/approve/{status}', 'EntryController@approve')->name('approve');

Route::redirect('/me','/admin');

Route::resource('contests', 'ContestController');
Route::resource('entries', 'EntryController');
Route::get('/comments', 'CommentsController@index');
Route::get('comments/{id}/approve/{status}', 'CommentsController@approve');

Route::get('entries/{entry}/add-media', 'EntryController@addMedia');
Route::get('entries/{entry}/approve/{status}', 'EntryController@approve');
Route::get('entries/media/{entry}', 'EntryController@addMedia');
Route::patch('entries/update-media/{entry}', 'EntryController@updateMedia');

Route::get('contestants', 'ContestantsController@index');

Route::get('tags/{tags}', 'TagController@show');

Route::get('/logout', 'ContestsController@logout');

Route::get('admin/site-media/add', 'SiteController@addMedia');
Route::patch('site/update-media/{site}', 'SiteController@updateMedia');
Route::get('/admin/site-media','SiteController@siteMedia');
Route::get('admin/logo-media/add', 'LogoController@addMedia');
Route::patch('logo/update-media/{logo}', 'LogoController@updateMedia');
Route::get('/admin/logo-media','LogoController@logoMedia');
