<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EvaluationsApiController;
use App\Http\Controllers\Api\ProjectsApiController;
use App\Http\Controllers\Api\PeopleApiController;
use App\Http\Controllers\Api\CompanyApiController;


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

Route::get('people',[PeopleApiController::class,'getPeople'])->name('people.list.api');
Route::get('projects',[ProjectsApiController::class,'getProjects'])->name('projects.list.api');
Route::get('evaluations',[EvaluationsApiController::class,'getEvaluations'])->name('evaluations.list.api');
Route::get('companies',[CompanyApiController::class,'getCompanies'])->name('companies.list.api');


