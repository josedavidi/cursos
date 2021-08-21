<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('service', function () {
    return view('services');
})->name('service');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//AXIOS

Route::get('services-all','ServiceController@index');
Route::post('storeService','ServiceController@store');
Route::put('editStatus/{id}','ServiceController@editStatus');
Route::get('service/{id}','ServiceController@serviceView')->name('service_detail');
Route::get('service-detail/{id}','ServiceController@serviceData')->name('service_data');

Route::view('contact','contact');

