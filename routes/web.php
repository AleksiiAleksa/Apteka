<?php
Auth::routes();

Route::get("/add", "IndexController@New");
Route::post('/add','IndexController@AddNews')->name('AddNews');

Route::get('/', "IndexController@Index");
Route::get('/{id}', "IndexController@ShowId");
Route::get('/Category/{rubric}', "IndexController@ShowCategory");
Route::get('/delete/{id}','IndexController@DeleteNews')->name('Delete');


//Route::get('/home', 'Controller@index')->name('home');