<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyController;


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



Route::group(['middleware'=>'auth'], function(){
    Route::get('/', function () {
        return view('home');
    });

//people routes
Route::resource('people',PersonController::class);
Route::get('people/delete/{person}',[PersonController::class,'destroy'])->name('people.delete');
//Company routes
Route::resource('companies',CompanyController::class);
Route::get('companies/delete/{company}',[CompanyController::class,'destroy'])->name('companies.delete');
//projects routes
Route::resource('projects',ProjectController::class);
Route::get('projects/delete/{project}',[ProjectController::class,'destroy'])->name('projects.delete');
//evaluation routes 
Route::resource('evaluations',EvaluationController::class);
Route::get('evaluations/delete/{evaluation}',[EvaluationController::class,'destroy'])->name('evaluations.delete');
});

Auth::routes();


