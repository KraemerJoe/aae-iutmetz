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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
	Route::resource('posts', 'PostsController');
});


Route::get('news', function () {
    return view('pages/news');
});

Route::get('/', function () {
    return redirect('news');
});


Route::get('annuaire', function () {
    return view('pages/annuaire');
});

Auth::routes();

Route::get('/profile/{slug}');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')  
    ->name('admin');

    
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/confirm/{user_id}/{token}', [
    'as' => 'confirmation_path',
    'uses' => 'Auth\RegisterController@confirm'
]);
