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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('home');
    } else {
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
  });
});

/*
|--------------------------------------------------------------------------
| Routes For Resources Generic
|--------------------------------------------------------------------------
|
| No description
|
*/

Route::resource('posts','PostController');
Route::resource('Medical','MedicalController');
Route::resource('Daftar','DaftarController');
Route::resource('Checkup','CheckupController');
Route::resource('Feedback','FeedbackController');

/*
|--------------------------------------------------------------------------
| Routes For Customize Route
|--------------------------------------------------------------------------
|
| No description
|
*/
  
Route::get('/staff','PostController@staff');
Route::get('/doctor','PostController@doctor');
