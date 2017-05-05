<?php
use App\Technology;

Route::get('/', function () {
    return redirect('/portfolio');
});
Route::post('/portfolio','PageController@checkPassword')->name('confirm_verified');
Route::get('/portfolio', 'PageController@passwordPage');

Route::get('/admin/project','ProjectsController@index')->name('project_list');
Route::get('/admin/project/{id}','ProjectsController@show')->name('project_show');
Route::get('/admin/project/create','ProjectsController@create')->name('project_form');
Route::post('/admin/project/create','ProjectsController@store')->name('project_save');
Route::delete('/admin/project/{id}', 'ProjectsController@destroy')->name('project_delete');

//Institution
Route::get('/admin/institution','InstitutionsController@index')->name('institution_list');
Route::get('/admin/institution/create','InstitutionsController@create')->name('institution_form');
Route::get('/admin/institution/{id}','InstitutionsController@show')->name('institution_show');
Route::post('/admin/institution/create','InstitutionsController@store')->name('institution_save');
Route::delete('/admin/institution/{id}', 'InstitutionsController@destroy')->name('institution_delete');

//Experience
Route::get('/admin/experience','ExperiencesController@index')->name('experience_list');
Route::get('/admin/experience/create','ExperiencesController@create')->name('experience_form');
Route::get('/admin/experience/{id}','ExperiencesController@show')->name('experience_show');
Route::post('/admin/experience/create','ExperiencesController@store')->name('experience_save');
Route::delete('/admin/experience/{id}', 'ExperiencesController@destroy')->name('experience_delete');



// Technology
Route::post('/admin/project/{project}/technology','TechnologiesController@store')->name('technology_save');
Route::delete('/admin/technology/{id}', 'TechnologiesController@destroy')->name('technology_delete');

//Duty
Route::post('/admin/experience/{experience}/duty','DutiesController@store')->name('duty_save');
Route::delete('/admin/duty/{id}', 'DutiesController@destroy')->name('duty_delete');

//Subjects
Route::post('/admin/institution/{institution}/subjects','SubjectsController@store')->name('subject_save');
Route::delete('/admin/subject/{id}', 'SubjectsController@destroy')->name('subject_delete');

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('admin_home');
