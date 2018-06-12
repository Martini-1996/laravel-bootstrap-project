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

//Route::get('/home', 'HomeController@index');
//Route::post('/contact/send',"UserMessage@index");
//Route::get('/messages',"UserMessage@getMessages");
/*

Auth::routes();


*/
Route::get('/',function(){
return view('home');

});


Route::get('/about',function(){
return view('about');
 
});
Route::get('/rooms',function(){
return view('rooms');

});
Route::get('/gallery',function(){
return view('gallery');

});
Route::get('/contact',function(){
return view('contact');

});
Route::post('/contact','UserMessage@index');
Route::get('login', 
'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('login',
 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/proceed','UserMessage@session');
Route::get('/proceed','UserMessage@proceed');
Route::post('/finish','UserMessage@finish');
Route::get('{type}','UserMessage@book');

