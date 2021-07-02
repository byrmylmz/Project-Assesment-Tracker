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

Route::get('people',[PeopleApiController::class,'getPeople'])->name('api.people');
Route::get('projects',[ProjectsApiController::class,'getProjects'])->name('api.project');
Route::get('evaluations',[EvaluationsApiController::class,'getEvaluations'])->name('api.eva');
//Route::get('companies',[CompanyApiController::class,'getCompanies'])->name('api.com');


