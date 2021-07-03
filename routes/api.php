<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BayEvaluationApiController;
use App\Http\Controllers\Api\BayPeopleApiController;
use App\Http\Controllers\Api\BayProjectsApiController;
use App\Http\Controllers\Api\BayCompanyApiController;


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
Route::get('companies',[BayCompanyApiController::class,'getCompanies'])->name('api.companies');


