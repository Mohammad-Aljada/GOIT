<?php

use App\Http\Controllers\ApiController\CompanyController;
use App\Http\Controllers\ApiController\MeetingController;
use App\Http\Controllers\ApiController\ServiceApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//mettings
Route::middleware('auth')->group(function () {
    Route::get('/getallmeetings', [MeetingController::class, 'index']);
    Route::post('/addmeeting', [MeetingController::class, 'store']);
    Route::get('/getmeeting/{id}', [MeetingController::class, 'show']);
    Route::put('/updatemeeting/{id}', [MeetingController::class, 'update']);
    Route::delete('/deletemeeting/{id}', [MeetingController::class, 'destroy']);
});

//services
Route::middleware('auth')->group(function () {
    Route::get('/getallservices', [ServiceApiController::class, 'index']);
    Route::get('/getservice/{id}', [ServiceApiController::class, 'show']);
    Route::post('/addservice', [ServiceApiController::class, 'store']);
    Route::delete('/deleteservice/{id}', [ServiceApiController::class, 'destroy']);
    Route::put('/updateservice/{id}', [ServiceApiController::class, 'update']);
});

//companies
Route::middleware('auth')->group(function () {
    Route::get('/getallcompanies', [CompanyController::class, 'index']);
    Route::get('/getcompany/{id}', [CompanyController::class, 'show']);
    Route::post('/addcompany', [CompanyController::class, 'store']);
    Route::delete('/deletecompany/{id}', [CompanyController::class, 'destroy']);
    Route::put('/updatecompany/{id}', [CompanyController::class, 'update']);
});
