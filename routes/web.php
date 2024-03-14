<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\DemandeAchatController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProfileController;
use App\Models\Achat;
use App\Models\DemandeAchat;
use Database\Factories\FournisseurFactory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/fournisseur',[FournisseurController::class, 'index'])->name('fournisseur.index');
    Route::get('/fournisseur/{fournisseur}', [FournisseurController::class, 'edit'])->name('fournisseur.edit');
    Route::patch('/fournisseur/{fournisseur}', [FournisseurController::class, 'update'])->name('fournisseur.update');
    
    Route::get('/achats',[AchatController::class, 'index'])->name('achats.index');
    Route::get('/achats/{achats}', [AchatController::class, 'edit'])->name('achats.edit');
    
    Route::get('/achats/demandeachat',[DemandeAchatController::class,'index'])->name('demandeachat.index');
    Route::get('/achats/demandeachat/{demandeachat}', [DemandeAchatController::class, 'edit'])->name('demandeachat.edit');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
