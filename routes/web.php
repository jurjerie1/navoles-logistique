<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
// Route::get('register/{token}', [RegisteredUserController::class, 'create']);
// Route::post('register/', [RegisteredUserController::class, 'store']);
Route::get('register/{token}/edit', [RegisteredUserController::class, 'edit'])->name('user.create');
// Route::match(array('GET','POST'),'/register/{token}/edit', [RegisteredUserController::class, 'edit'])->name('user.create');
// Route::match(array('GET','POST'),'login:', 'AuthController@login');
Route::put('register/{token}/update', [RegisteredUserController::class,"update"])->name('register.upload');



require __DIR__.'/auth.php';
