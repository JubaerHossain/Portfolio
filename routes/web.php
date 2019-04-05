<?php

/*Client side*/

Route::get('/','front\HomeController@index')->name('main');
Route::post('/contact','front\ContactController@store')->name('contact-store');





/*Admin*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {

    Route::get('/about', 'front\AboutController@index')->name('about');

    /*Work Demo*/

    Route::get('/work', 'admin\WorkController@show')->name('work');
    Route::get('/work-add', 'admin\WorkController@add')->name('work-add');
    Route::post('/work-store', 'admin\WorkController@store')->name('work-store');
    Route::get('/work-edit/{id}', 'admin\WorkController@edit')->name('work-edit');
    Route::post('/work-edit', 'admin\WorkController@update')->name('work-update');
    Route::get('/work-delete/{id}', 'admin\WorkController@delete')->name('choose-delete');




    Route::get('/contact', 'front\AboutController@index')->name('contact');
});


