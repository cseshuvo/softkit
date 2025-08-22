<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\RolePermission\RolePermissionController;
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
    
    Route::get('role-permission', [RolePermissionController::class, 'index'])->name('role.permission.index');
    Route::post('role-permission/role-store', [RolePermissionController::class, 'roleStore'])->name('role.permission.role.store');
    Route::post('role-permission/permission-store', [RolePermissionController::class, 'permissionStore'])->name('role.permission.permission.store');
    Route::post('role-permission/assign-permission/{role}', [RolePermissionController::class, 'assignPermissionStore'])->name('role.permission.assign.store');



      // Role & Permission page
    Route::get('role-permission', [RolePermissionController::class, 'index'])
        ->name('role.permission.index');

    // Create Role
    Route::post('role-permission/role-store', [RolePermissionController::class, 'roleStore'])
        ->name('role.permission.role.store');

    // Create Permission
    Route::post('role-permission/permission-store', [RolePermissionController::class, 'permissionStore'])
        ->name('role.permission.permission.store');

    // Assign Permissions to Role
    Route::post('role-permission/assign/{role}', [RolePermissionController::class, 'assignPermissionStore'])
        ->name('role.permission.assign.store');


});



require __DIR__.'/auth.php';
