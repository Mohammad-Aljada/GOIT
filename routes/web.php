<?php

use App\Http\Controllers\ApiController\CompanyController;
use App\Http\Controllers\ApiController\MeetingController;
use App\Http\Controllers\ApiController\ServiceApiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/meetings', function () {
        return view('admin.Meetings');
    })->name('meetings');
    Route::get('/services', function () {
        return view('admin.Services');
    })->name('services');
    Route::get('/companies', function () {
        return view('admin.Companies');
    })->name('companies');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ourServices', [ServiceController::class, 'ourservices'])->name('ourservices.index');
Route::get('/ourServices/{slug}', [ServiceController::class, 'show'])->name('ourservices.show');

//route api

require __DIR__ . '/api.php';
require __DIR__ . '/auth.php';
