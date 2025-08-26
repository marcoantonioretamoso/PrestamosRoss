<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/admin/dashboard');
    }
    return view('admin.auth.login');
});
//login
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/dashboard',[DashboardController::class, 'index']);
});