<?php

use App\Http\Controllers\AdminSupportController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ModuleController;
use App\Http\Controllers\backend\ParametreController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\DigitalCommunicationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;




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

    // admin ticafrique
    Route::prefix('ticafrique')->controller(AdminSupportController::class)->group(function (){
        // references
        Route::get('create', 'create')->name('ticafrique.admin-references.create');
        Route::post('store', 'storeReferences')->name('ticafrique.admin-references.store');
        Route::get('index', 'index')->name('ticafrique.admin-references.index');
        Route::get('edit/{id}', 'edit')->name('ticafrique.admin-references.edit');
        Route::put('update/{id}', 'update')->name('ticafrique.admin-references.update');
        Route::get('delete/{id}', 'delete')->name('ticafrique.admin-references.delete');

        // avis
        Route::get('avis', 'avis')->name('ticafrique.admin-avis.index');
        Route::delete('delete-avis/{id}', 'deleteAvis')->name('ticafrique.admin-avis.delete');

        // carrousel
        Route::get('carrousel', 'carrousel')->name('ticafrique.admin-carousel.index');
        Route::get('create-carrousel', 'createCarrousel')->name('ticafrique.admin-carousel.create');
        Route::post('store-carrousel', 'storeCarrousel')->name('ticafrique.admin-carousel.store');
        Route::delete('delete-carrousel/{id}', 'deleteCarrousel')->name('ticafrique.admin-carousel.delete');

        // projets
        Route::get('projects', 'projects')->name('ticafrique.admin-projects.index');
        Route::delete('delete-project/{id}', 'deleteProject')->name('ticafrique.admin-projects.delete');
    });
});

Route::name('ticafrique.')->controller(SupportController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/reference', 'references')->name('references');
    Route::get('/contacts', 'contacts')->name('contacts');
    Route::post('/avis', 'storeAvis')->name('avis');
});

// Route pour la soumission de projet
Route::get('/create-project', [ProjectController::class, 'create'])->name('project.create');
Route::post('/submit-project', [ProjectController::class, 'store'])->name('project.store');

// Route pour les services digitaux et communication
Route::get('/index', [DigitalCommunicationController::class, 'index_digital'])->name('digital.index');

