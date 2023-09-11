<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ModelesController;
use App\Http\Controllers\MesuresController;
use App\Http\Controllers\CoutureController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PersonnelsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('Clients/ajouter_client', [ClientsController::class, 'create'])->name('ajouter_client');
Route::get('Clients/clients', [ClientsController::class, 'clients'])->name('clients');

Route::get('Modeles/ajouterM', [ModelesController::class, 'create'])->name('ajouterM');
Route::get('Modeles/modeles', [ModelesController::class, 'modeles'])->name('modeles');

Route::get('Mesures/mesures', [MesuresController::class, 'mesures'])->name('mesures');

Route::get('Couture/couture', [CoutureController::class, 'couture'])->name('couture');

Route::get('Paiement/paiement', [PaiementController::class, 'paiement'])->name('paiement');

Route::get('Personnels/personnels', [PersonnelsController::class, 'personnels'])->name('personnels');


















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
