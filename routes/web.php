<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('admin')->group(function () {
    Route::get('notes', 'NotesController@index')->name('notes.index');
    Route::post('notes', 'NotesController@store')->name('notes.store');
    Route::put('notes/{note}', 'NotesController@update')->name('notes.update');
    Route::delete('notes/{note}', 'NotesController@destroy')->name('notes.destroy');
});
