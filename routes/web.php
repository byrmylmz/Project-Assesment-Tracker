<?php
/**
 * main controller
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyController;
/**
 * api controller
 */
use App\Http\Controllers\Api\EvaluationsApiController;
use App\Http\Controllers\Api\ProjectsApiController;
use App\Http\Controllers\Api\PeopleApiController;
use App\Http\Controllers\Api\CompanyApiController;


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


Auth::routes([
    'register' => false,
   
]);
Route::group(['middleware'=>'auth'], function(){
Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('home'); });

//people routes
Route::resource('people',PersonController::class);
Route::get('people/delete/{person}',[PersonController::class,'destroy'])->name('people.delete');
Route::get('peopledata',[PeopleApiController::class,'getPeople'])->name('people.list');

//Company routes
Route::resource('companies',CompanyController::class);
Route::get('companies/delete/{company}',[CompanyController::class,'destroy'])->name('companies.delete');
Route::get('companiesdata',[CompanyApiController::class,'getCompanies'])->name('companies.list');

//projects routes
Route::resource('projects',ProjectController::class);
Route::get('projects/delete/{project}',[ProjectController::class,'destroy'])->name('projects.delete');
Route::get('projectsdata',[ProjectsApiController::class,'getProjects'])->name('projects.list');

//evaluation routes 
Route::resource('evaluations',EvaluationController::class);
Route::get('evaluations/delete/{evaluation}',[EvaluationController::class,'destroy'])->name('evaluations.delete');
Route::get('evaluationsdata',[EvaluationsApiController::class,'getEvaluations'])->name('evaluations.list');

});




