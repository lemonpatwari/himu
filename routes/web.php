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

Route::get('/',[
    'uses'=>'RpirController@home',
    'as'=>'/'
]);
Route::get('civil/teachers',[
    'uses'=>'RpirController@civilTeachers',
    'as'=>'civil-teachers'
]);
Route::get('computer/teachers',[
    'uses'=>'RpirController@computerTeachers',
    'as'=>'computer-teachers'
]);
Route::get('mechanical/teachers',[
    'uses'=>'RpirController@mechanicalTeachers',
    'as'=>'mechanical-teachers'
]);
Route::get('power/teachers',[
    'uses'=>'RpirController@powerTeachers',
    'as'=>'power-teachers'
]);
Route::get('electronics/teachers',[
    'uses'=>'RpirController@electronicsTeachers',
    'as'=>'electronics-teachers'
]);
Route::get('rs-department/teachers',[
    'uses'=>'RpirController@rsDepartmentTeachers',
    'as'=>'rs-department-teachers'
]);
Route::get('electro-medical/teachers',[
    'uses'=>'RpirController@electroMedicalTeachers',
    'as'=>'electro-medical-teachers'
]);
Route::get('electrical/teachers',[
    'uses'=>'RpirController@electricallTeachers',
    'as'=>'electrical-teachers'
]);

Route::get('show-details/{id}',[
    'uses'=>'DetailsShow@teachers',
    'as'=>'show-details'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('department', 'DepartmentController');
Route::resource('designation', 'DesignationController');
Route::resource('teacher', 'TeacherController');
Route::resource('slider', 'SliderController');
Route::resource('lemon', 'LemonController');

Route::get('deactive/{id}','LemonController@deactiveAction')->name('deactive-action');
Route::get('active/{id}','LemonController@activeAction')->name('active-action');





