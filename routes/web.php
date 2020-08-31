<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','StartPageController@index')->name('startpage.index');
Route::get('/welcome/{locale}','WelcomePageController@show')->name('welcome.show');
Route::get('/consent_forms/create','ConsentFormController@create')->name('consent_forms.create');
Route::post('/consent_forms','ConsentFormController@store')->name('consent_forms.store');
Route::get('/demographic_questionnaires/create','DemographicQuestionnaireController@create')->name('demographic_questionnaires.create');
Route::post('/demographic_questionnaires','DemographicQuestionnaireController@store')->name('demographic_questionnaires.store');
Route::get('/recordings/create','RecordingController@create')->name('recordings.create');
Route::post('/recordings','RecordingController@store')->name('recordings.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
