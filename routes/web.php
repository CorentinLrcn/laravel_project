<?php

use App\Http\Controllers\ContributionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/organisations','App\Http\Controllers\OrganisationController@organisations')->name('organisations');

Route::get('/missions','App\Http\Controllers\MissionController@missions')->name('missions');

Route::get('/missionLines','App\Http\Controllers\MissionLineController@missionLines')->name('missionLines');

Route::get('/contributions', 'App\Http\Controllers\ContributionController@contributions')->name('contributions');

Route::get('/transactions', 'App\Http\Controllers\TransactionController@transactions')->name('transactions');