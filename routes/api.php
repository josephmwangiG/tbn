<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoachingController;
use App\Http\Controllers\TrainingEventsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/login", [LoginController::class, 'authenticate']);
Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::get('/get-user', [UserController::class, "getUser"]);

    // Coach
    Route::put("coaches/profile/add-education", [CoachController::class, 'addEducation']);
    Route::put("coaches/profile/update-education/{id}", [CoachController::class, 'updateEducation']);
    Route::put("coaches/profile/add-experience", [CoachController::class, 'addExperience']);
    Route::put("coaches/profile/update-experience", [CoachController::class, 'updateExperience']);
    Route::put("coaches/profile/add-owner", [CoachController::class, 'addOwner']);
    Route::put("coaches/profile/update-owner/{id}", [CoachController::class, 'updateOwner']);

    Route::post('/logout', [LoginController::class, "logout"]);
});

Route::resource("businesses", BusinessController::class);
Route::put("businesses/{id}/{option}", [BusinessController::class, 'approveAccount']);
Route::resource("alumni", AlumniController::class);
Route::put("alumni/{id}/{option}", [AlumniController::class, 'approveAccount']);
Route::resource("coaches", CoachController::class);
Route::put("coaches/{id}/{option}", [CoachController::class, 'approveAccount']);
Route::resource("trainingEvents", TrainingEventsController::class);
Route::resource("coachings", CoachingController::class);
