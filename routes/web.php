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
Route::get('/Home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('createteam', function () {
    return view('createteam');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin') 
    ->middleware('is_admin')
    ->name('admin');

route::get('player{id}', 'TeamController@editeam');
    

Route::get('editplayer', 'TaskController@create');
Route::post('storeplayer', 'TaskController@store');

Route::get('createteam', 'TeamController@create');
Route::post('storeteam', 'TeamController@store');

Route::get('player{id}','TaskController@edit');
Route::post('player{id}','TaskController@update');

Route::resource('tasks', 'TaskController');

Route::get('player','TaskController@index');

route::get('/Teams', 'TeamController@index');



route::get('Teams/Stats/{teamid}', 'StatsteamController@getStats');

route::get('/Matches/{teamid}', 'MatchController@getMatches');