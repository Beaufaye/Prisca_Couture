<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ModelesController;
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

Route::get('ajouter_client', [ClientsController::class, 'ajouter_client'])->name('ajouter_client');
Route::post('ajouterc_traitement', [ClientsController::class, 'store'])->name('store_client');
Route::get('clients', [ClientsController::class, 'clients'])->name('clients');

Route::get('ajouterM', [ModelesController::class, 'store'])->name('store_modele');

Route::get('Modeles/modeles', [ModelesController::class, 'storeM'])->name('modeles');

Route::get('Couture/couture', [CoutureController::class, 'couture'])->name('couture');

Route::get('Paiement/paiement', [PaiementController::class, 'paiement'])->name('paiement');

Route::get('Personnels/personnels', [PersonnelsController::class, 'personnels'])->name('personnels');














Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
