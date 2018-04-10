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


Route::get('/offerpage', 'UserController@offerPage');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/booknow/{id}', 'UserController@booknowPage');
Route::get('/bookrequests', 'UserController@bookRequests')->name('book')->middleware('auth');


Route::post('/booktour', 'UserController@booktour');


Route::get('/printpdf/{id}', 'UserController@pdf')->middleware('auth');
// ADMIN PAGE
Route::post('/confirm', 'UserController@confirm')->middleware('auth');
Route::post('/approve', 'UserController@approve')->middleware('auth');
Route::post('/reject', 'UserController@reject')->middleware('auth');

Route::get('/email', 'UserController@email')->middleware('admin');
Route::get('/admin', 'UserController@adminHome')->middleware('admin')->name('booklist');
Route::get('/adminstatus/{id}', 'UserController@adminbookstatus')->middleware('admin');
Route::get('/adminbook', 'UserController@adminHome')->middleware('admin');