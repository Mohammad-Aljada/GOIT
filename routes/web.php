<?php

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/Services', [ServiceController::class, 'services'])->name('services');

Route::prefix('Services')->group(function () {
    Route::get('/Information-Security', [ServiceController::class, 'informationSecurity'])->name('Information Security');
    Route::get('/Support-Services', [ServiceController::class, 'supportServices'])->name('Support Services');
    Route::get('/IP-PBX', [ServiceController::class, 'iPPbx'])->name('IP PBX Solutions');
    Route::get('/Wireless-Solutions', [ServiceController::class, 'wirelessSolutions'])->name('Wireless Solutions');
    Route::get('/HPE-Solution', [ServiceController::class, 'hpeSolution'])->name('HPE Solution');
    Route::get('/Data-Center-Solutions', [ServiceController::class, 'dataCenterSolutions'])->name('Data Center Solutions');
    Route::get('/Cloud-Computing', [ServiceController::class, 'cloudComputing'])->name('Cloud Computing');
    Route::get('/Firewall-Protection', [ServiceController::class, 'firewallProtection'])->name('Firewall Protection');
});
require __DIR__.'/auth.php';
