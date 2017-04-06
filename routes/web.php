<?php

Route::get('/','WelcomeController');
Route::get('/calculate','A3Controller@calc');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
