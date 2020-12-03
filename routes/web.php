<?php

Route::get('/login',function (){
	return view('instagram');
});
Route::get('/registration',function (){
	return view('instagram');
});
Route::get('/forget',function (){
	return view('instagram');
});

Route::group(['middleware' => ['realuser']], function () {
    
    Route::get('/', function () {
        return view('instagram');
	});
	Route::get('/chat', function () {
        return view('instagram');
	});

});