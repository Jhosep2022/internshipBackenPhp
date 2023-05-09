<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("v1/contacts", ContactController::class);
Route::apiResource("v1/degree", DegreeController::class); 
Route::apiResource("v1/internship", InternshipController::class);
Route::apiResource("v1/company", CompanyController::class);

Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/degree', [DegreeController::class, 'store']);
Route::post('/internship', [InternshipController::class, 'store']);
Route::post('/company', [CompanyController::class, 'store']);


Route::put('/contacts/{id}', [ContactController::class, 'update']);
Route::put('/degree/{id}', [DegreeController::class, 'update']);
Route::put('/internship/{id}', [InternshipController::class, 'update']);
Route::put('/company/{id}', [CompanyController::class, 'update']);