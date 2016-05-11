<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'IndexController@index');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);


Route::get('/akoj','AkojController@index');
Route::get('/akoj/pid/{pid}','AkojController@problem');

Route::get('/nyoj','NyojController@index');
Route::get('/nyoj/pid/{pid}','NyojController@problem');

Route::get('/hduoj','HduojController@index');
Route::get('/hduoj/pid/{pid}','HduojController@problem');

Route::get('/poj','PojController@index');
Route::get('/poj/pid/{pid}','PojController@problem');

Route::get('/zoj','ZojController@index');
Route::get('/zoj/pid/{pid}','ZojController@problem');

Route::get('/search','SearchController@index');
Route::post('/searchs','SearchController@back');

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');

Route::get('/step',function(){
	return view('step');
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/rank','RankController@rank');	//当前积分榜

Route::get('/classify','ClassifyController@index');
Route::get('/classify/{id}','ClassifyController@problem');

Route::get('/wap',function(){
	return view('wap');
});


Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');


Route::get('profile',function(){
	return "注册成功！";
});

Route::get('home', 'HomeController@index');