<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('backend::home.welcome');
});

Route::resource('doctors', 'DoctorsController');
Route::resource('patients', 'PatientsController');
Route::resource('schedules', 'SchedulesController');