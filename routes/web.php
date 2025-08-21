<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ModuleController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\ParametreController;
use App\Http\Controllers\backend\PermissionController;

Route::fallback(function () {
    return view('backend.utility.auth-404-basic');
});

Route::middleware(['admin'])->prefix('admin')->group(function () {

    // login and logout
    Route::controller(AdminController::class)->group(function () {
        Route::get('/login', 'login')->name('admin.login')->withoutMiddleware('admin'); // page formulaire de connexion
        Route::post('/login', 'login')->name('admin.login')->withoutMiddleware('admin'); // envoi du formulaire
        Route::post('/logout', 'logout')->name('admin.logout');
    });

    // dashboard admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // parametre application
    Route::prefix('parametre')->controller(ParametreController::class)->group(function () {
        Route::get('', 'index')->name('parametre.index');
        Route::post('store', 'store')->name('parametre.store');
        Route::get('maintenance-up', 'maintenanceUp')->name('parametre.maintenance-up');
        Route::get('maintenance-down', 'maintenanceDown')->name('parametre.maintenance-down');
        Route::get('optimize-clear', 'optimizeClear')->name('parametre.optimize-clear');
        Route::get('download-backup/{file}', 'downloadBackup')->name('setting.download-backup');  // download backup db
    });

    //register admin
    Route::prefix('register')->controller(AdminController::class)->group(function () {
        Route::get('', 'index')->name('admin-register.index');
        Route::post('store', 'store')->name('admin-register.store');
        Route::post('update/{id}', 'update')->name('admin-register.update');
        Route::get('delete/{id}', 'delete')->name('admin-register.delete');
        Route::get('profil/{id}', 'profil')->name('admin-register.profil');
        Route::post('change-password', 'changePassword')->name('admin-register.new-password');
    });

    //role
    Route::prefix('role')->controller(RoleController::class)->group(function () {
        Route::get('', 'index')->name('role.index');
        Route::post('store', 'store')->name('role.store');
        Route::post('update/{id}', 'update')->name('role.update');
        Route::get('delete/{id}', 'delete')->name('role.delete');
    });

    //permission
    Route::prefix('permission')->controller(PermissionController::class)->group(function () {
        Route::get('', 'index')->name('permission.index');
        Route::get('create', 'create')->name('permission.create');
        Route::post('store', 'store')->name('permission.store');
        Route::get('edit/{id}', 'edit')->name('permission.edit'); // corrigé ici
        Route::put('update/{id}', 'update')->name('permission.update');
        Route::get('delete/{id}', 'delete')->name('permission.delete');
    });

    //module
    Route::prefix('module')->controller(ModuleController::class)->group(function () {
        Route::get('', 'index')->name('module.index');
        Route::post('store', 'store')->name('module.store');
        Route::post('update/{id}', 'update')->name('module.update');
        Route::get('delete/{id}', 'delete')->name('module.delete');
    });
});

Route::get('/index',function(){
    return view('index');
});
