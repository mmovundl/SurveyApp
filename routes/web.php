<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResultsController;

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
    return view('index');
})->name('/');

Route::get('/surveyform',function(){
    return view('surveyform');
})->name('surveyform');

Route::post('/add',[FormController::class,'add'])->name('form.add');
Route::get('/results',[ResultsController::class,'getResults'])->name('results.results');

