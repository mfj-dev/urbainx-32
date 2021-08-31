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

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| English
|--------------------------------------------------------------------------
|
*/
Route::get('english', function(){
    Session::put('lang','english');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| Arabic
|--------------------------------------------------------------------------
|
*/
Route::get('arabic', function(){
    Session::put('lang','arabic');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| Arabic
|--------------------------------------------------------------------------
|
*/
Route::get('German', function(){
    Session::put('lang','German');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();
// HomeController index
Route::get('/', 'HomeController@index')->name('home');
// HomeController about
Route::get('about', 'HomeController@about')->name('about');
// HomeController contact
Route::get('contact', 'HomeController@contact')->name('contact');
// searchController search
Route::get('search', 'Searchcontroller@search')->name('search');
/*
|--------------------------------------------------------------------------
| Categorescontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Categores','Categorescontroller');
/*
|--------------------------------------------------------------------------
| Listescontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Listes','Listescontroller');
/*
|--------------------------------------------------------------------------
| Reviewscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Reviews','Reviewscontroller');
/*
|--------------------------------------------------------------------------
| Bookcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Books','Bookcontroller');
/*
|--------------------------------------------------------------------------
| messagescontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Messages','messagescontroller');
/*
|--------------------------------------------------------------------------
| CitiesController
|--------------------------------------------------------------------------
|
*/
Route::resource('Cities','CitiesController');
/*
|--------------------------------------------------------------------------
| Usercontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Users','Usercontroller');
/*
|--------------------------------------------------------------------------
| Favouritecontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Favourites','Favouritecontroller');
/*
|--------------------------------------------------------------------------
| Newscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('News','Newscontroller');
/*
|--------------------------------------------------------------------------
| CommentController
|--------------------------------------------------------------------------
|
*/
Route::resource('Comments','CommentController');

