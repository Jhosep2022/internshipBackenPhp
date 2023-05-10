<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DegreeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//genera un post 
Route::post('/contacts', [ContactController::class, 'store']);

//genera un get
Route::get('/contacts', [ContactController::class, 'index']);

//genera un get
Route::get('/contacts/{id}', [ContactController::class, 'show']);

//genera un put
Route::put('/contacts/{id}', [ContactController::class, 'update']);

//genera un delete
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);