<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibleStudyController;

Route::get('/bible-study-request-form', 'App\Http\Controllers\BibleStudyController@form');

Route::post('/bible-study-request-forms', 'App\Http\Controllers\BibleStudyController@create');

Route::get('/bible-study-request', 'App\Http\Controllers\BibleStudyController@requests');

Route::get('/thank-you', 'App\Http\Controllers\BibleStudyController@thanks');