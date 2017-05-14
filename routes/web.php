<?php
use App\Technology;

Route::get('/', function () {
    return redirect('/portfolio');
});
Route::post('/portfolio','PageController@checkPassword')->name('confirm_verified');
Route::get('/portfolio', 'PageController@passwordPage');



Auth::routes();
