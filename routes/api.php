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
Route::get("coaches/{id}/view/profile", [CoachController::class, 'show']);

Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::get('/get-user', [UserController::class, "getUser"]);
    Route::put('/businesses/{id}/update/profile', [BusinessController::class, "updateProfile"]);
    Route::post('/businesses/add/business/owner', [BusinessController::class, "addBusinessOwner"]);
    Route::get("businesses/{id}/get/profile", [BusinessController::class, 'show']);

    // Coach
    Route::post("coaches/profile/add-education", [CoachController::class, 'addEducation']);
    Route::put("coaches/profile/update-education/{id}", [CoachController::class, 'updateEducation']);
    Route::post("coaches/profile/add-experience", [CoachController::class, 'addExperience']);
    Route::put("coaches/profile/update-experience", [CoachController::class, 'updateExperience']);
    Route::put("coaches/profile/add-owner", [CoachController::class, 'addOwner']);
    Route::get("coaches/{id}/get/profile", [CoachController::class, 'show']);
    Route::put("coaches/{id}/update/profile", [CoachController::class, 'updateProfile']);

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
