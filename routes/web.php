<?php

use App\Models\Entreprise;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsepController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PaysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::get('/', [UsepController::class, 'index'])->name('home');
    Route::get('/entreprise', [EntrepriseController::class, 'index'])->name('entreprise.gestion');
    Route::get('/entreprise/employes', [EntrepriseController::class, 'employe'])->name('entreprise..gestion.employe');
    Route::get('/entreprise/employes/add', [EntrepriseController::class, 'addEmploye'])->name('entreprise.gestion.employe.add');
    

    Route::put('/entreprise/employes/add/create', [RegisteredUserController::class, 'store'])->name('entreprise.gestion.employe.gestion');

    Route::get('/entreprise/employes/{user}/edit', [EntrepriseController::class, 'editEmploye'])->name('entreprise.gestion.employe.edit');
    Route::put('/entreprise/employes/{user}/update', [EntrepriseController::class, 'updateEmploye'])->name('entreprise.gestion.employe.update');
    Route::get('/entreprise/employes/{user}/deleted', [EntrepriseController::class, 'deleteEmploye'])->name('entreprise.gestion.employe.delete');

    Route::get('/missions/part1/add', [MissionController::class, 'editMission'])->name('missions.part1.add');
    Route::put('/missions/part1/create', [MissionController::class, 'create_mission'])->name('missions.part1.create');Route::get('/missions/{mission}/part2/add', [MissionController::class, 'editMission1'])->name('missions.part2.add');
    Route::put('/missions/{mission}/part2/create', [MissionController::class, 'create_mission1'])->name('missions.part2.create');

    Route::get('/missions', [MissionController::class, 'index'])->name('missions.index');

    
});

Route::middleware('admin')->group(function () {

    Route::get('/admin', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/admin/entreprises', [AdminController::class, 'entreprise'])->name('admin.entreprise');

    Route::get('/admin/pays', [AdminController::class, 'pays'])->name('admin.pays');
    Route::get('/admin/pays/add', [AdminController::class, 'addPays'])->name('admin.pays.add');
    Route::put('/admin/pays/create', [AdminController::class, 'createPays'])->name('admin.pays.create');
    Route::get('/admin/pays/{pays}/destroy', [AdminController::class, 'destroyPays'])->name('admin.pays.delete');

    Route::get('/admin/villes', [AdminController::class, 'villes'])->name('admin.villes');
    Route::get('/admin/villes/add', [AdminController::class, 'addVilles'])->name('admin.villes.add');
    Route::put('/admin/villes/create', [AdminController::class, 'createVilles'])->name('admin.villes.create');
    Route::get('/admin/villes/{villes}/destroy', [AdminController::class, 'destroyVille'])->name('admin.villes.delete');


    Route::get('/admin/entreprisesIg', [AdminController::class, 'entreprises'])->name('admin.entreprisesIG');
    Route::get('/admin/entreprisesIg/add', [AdminController::class, 'addEntreprisesig'])->name('admin.entreprisesIg.add');
    Route::put('/admin/entreprisesIg/create', [AdminController::class, 'createEntreprisesIg'])->name('admin.entreprisesIG.create');
    Route::get('/admin/entreprisesIg/{entreprise}/destroy', [AdminController::class, 'destroyEntreprisesIg'])->name('admin.entreprisesIG.delete');



});
// Route::get('register/{token}', [RegisteredUserController::class, 'create']);
// Route::post('register/', [RegisteredUserController::class, 'store']);
Route::get('register/{token}/edit', [RegisteredUserController::class, 'edit'])->name('user.edit');
// Route::match(array('GET','POST'),'/register/{token}/edit', [RegisteredUserController::class, 'edit'])->name('user.create');
// Route::match(array('GET','POST'),'login:', 'AuthController@login');
Route::put('register/update', [RegisteredUserController::class,"update"])->name('register.upload');



require __DIR__.'/auth.php';
