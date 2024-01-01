<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminGard;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->name('admin.')->middleware([AdminGard::class])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/sms/send', [SMSController::class, 'sms_send'])->name('sms.send');
    Route::get('/sms/list', [SMSController::class, 'index'])->name('sms.list');
    Route::get('/profile',[WebController::class, 'index']);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
