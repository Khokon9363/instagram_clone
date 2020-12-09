<?php

Route::group(['middleware' => ['nologgedin']], function () {
    
    Route::get('/login',function (){	
		return view('instagram');
	});
	Route::get('/registration',function (){
		return view('instagram');
	});
	Route::get('/forget',function (){
		return view('instagram');
	});
	Route::post('register','UserController@register');

});

Route::group(['middleware' => ['loggedin']], function () {
    
    Route::get('/', function () {
		return view('instagram');
	});
	Route::get('/chat', function () {
        return view('instagram');
	});

});