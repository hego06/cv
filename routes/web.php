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

Route::get('/', 'FrontController@index');
Route::post('login','Auth\LoginController@login')->name('login');
Route::get('login', function(){
    return view('admin.login');
})->middleware('guest');


Route::middleware(['auth'])->group(function () {
    Route::resource('admin', 'UserController');
    Route::resource('education','EducationController');
    Route::resource('experience','ExperienceController');
    Route::resource('skill','UserSkillController');
    Route::post('logout','Auth\LoginController@logout')->name('logout');
});

