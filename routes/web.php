<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\RolePermission\RolePermissionController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin auth


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

    // Roles

    Route::prefix('role/permission')->name('role.permission.')->controller(RolePermissionController::class)->group(function () {

        Route::get('/', [RolePermissionController::class, 'index'])->name('index');
        Route::get('create', [RolePermissionController::class, 'create'])->name('create');
        Route::post('store/{id?}', [RolePermissionController::class, 'store'])->name('store');
        Route::get('edit/{id}', [RolePermissionController::class, 'edit'])->name('edit');
        Route::delete('destroy/{id}', [RolePermissionController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('general', [SettingController::class, 'general'])->name('general');
    });
});



require __DIR__ . '/auth.php';
