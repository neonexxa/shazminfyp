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
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('home');
    } else {
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
  });
});


Route::resource('posts','PostController');
Route::get('/create','PostController@create');
Route::get('/index','PostController@index');
Route::get('/staff','PostController@staff');
Route::get('/doctor','PostController@doctor');

Route::resource('Medical','MedicalController');
Route::get('/medindex','MedicalController@medindex');
Route::get('/medcreate','MedicalController@medcreate');

Route::resource('Daftar','DaftarController');
Route::get('/regindex','DaftarController@regindex');
Route::get('/regcreate','DaftarController@regcreate');

Route::resource('Checkup','CheckupController');
Route::get('/cekindex','CheckupController@cekindex');
Route::get('/cekcreate','CheckupController@cekcreate');

Route::resource('/Feedback','FeedbackController');
Route::get('/feedback','FeedbackController@feedback');
Route::get('/inputfeedbac','FeedbackController@inputfeedbac');
Route::get('/feedback2','FeedbackController@feedback2');
Route::get('/feedback3','FeedbackController@feedback3');
