<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ModelesController;
use App\Http\Controllers\CoutureController;
use App\Http\Controllers\DepenseController;
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

Route::get('ajouter_client', [ClientsController::class, 'ajouter_client'])->name('ajouter_client');
Route::post('ajouterc_traitement', [ClientsController::class, 'store'])->name('store_client');
Route::get('clients', [ClientsController::class, 'clients'])->name('clients');

Route::get('modele', [ModelesController::class, 'modele'])->name('modele');
Route::post('modeleT', [ModelesController::class, 'modeleT'])->name('modeleT');
Route::get('modeles', [ModelesController::class, 'modeles'])->name('modeles');

Route::get('coutures', [CoutureController::class, 'coutures'])->name('coutures');
Route::post('couture', [CoutureController::class, 'coutureT'])->name('coutureT');
Route::get('couture', [CoutureController::class, 'couture'])->name('couture');

Route::get('paiement', [PaiementController::class, 'paiement'])->name('paiement');
Route::get('paiements', [PaiementController::class, 'paiements'])->name('paiements');
Route::post('paiementT', [PaiementController::class, 'paiementT'])->name('paiementT');

Route::get('depensel', [DepenseController::class, 'depensel'])->name('depensel');
Route::get('depenseaj', [DepenseController::class, 'depenseaj'])->name('depenseaj');
Route::post('depense', [DepenseController::class, 'depense'])->name('depense');

Route::get('Personnels/personnels', [PersonnelsController::class, 'personnels'])->name('personnels');
Route::get('ajout_personnel', [PersonnelsController::class, 'ajout_personnel'])->name('ajout_personnel');
Route::post('Personnels/personnelT', [PersonnelsController::class, 'personnelT'])->name('personnelT');













Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
