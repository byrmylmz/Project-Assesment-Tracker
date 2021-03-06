<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BayEvaluationApiController;
use App\Http\Controllers\Api\BayPeopleApiController;
use App\Http\Controllers\Api\BayProjectsApiController;
use App\Http\Controllers\Api\BayCompanyApiController;
use App\Http\Controllers\Api\DashboardApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('people',[BayPeopleApiController::class,'getPeople'])->name('api.people');
Route::get('projects',[BayProjectsApiController::class,'getProjects'])->name('api.project');
Route::get('evaluations',[BayEvaluationApiController::class,'getEvaluations'])->name('api.evaluation');

//companies Crud
Route::post('/companies',[BayCompanyApiController::class,'store'])->name('api.companiesStore');
Route::get('/companies',[BayCompanyApiController::class,'getCompanies'])->name('api.companiesGet');
Route::put('/companies/{company}',[BayCompanyApiController::class,'update'])->name('api.companiesUpdate');
Route::delete('/companies/{company}',[BayCompanyApiController::class,'destroy'])->name('api.companiesDelete');


//dashboard routes
Route::get('dashboard/academic',[DashboardApiController::class,'getAcademic'])->name('dashboard.academic');
Route::get('dashboard/specialist',[DashboardApiController::class,'getSpecialist'])->name('dashboard.specialist');
Route::get('dashboard/topten',[DashboardApiController::class,'getTopTen'])->name('dashboard.topten');


