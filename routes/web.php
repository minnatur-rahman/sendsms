<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\WebController;
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
    return view('welcome');
});




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/sms', [SMSController::class, 'index']);
Route::get('/profile',[WebController::class, 'index']);
