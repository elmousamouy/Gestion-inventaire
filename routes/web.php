<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bien\BienController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);
Route::group(['middleware' => ['auth']], function() {
    Route::namespace('Bien')->group(function(){
        Route::get('/', [BienController::class ,'index']);
        Route::post('/Bien/search/', [BienController::class, 'recherche']);
        Route::post('/Bien/search/vna', [BienController::class, 'recherchevna']);
        Route::post('/Bien/search/affictation', [BienController::class, 'rechercheaffictation']);
        Route::post('/Bien/search/categorie/', [BienController::class, 'rechercheparcategorie']);
        Route::post('/Bien/search/entreprise', [BienController::class, 'rechercheparentreprise']);
        Route::get('/Bien/create', [BienController::class ,'create'])->name('bien.create');
        Route::post('/Bien/store', [BienController::class ,'store'])->name('bien.store');
        Route::get('/Biens', [BienController::class ,'index'])->name('bien.index');
        Route::get('/Biens/edit/{id}', [BienController::class ,'edit'])->name('bien.edit');
        Route::post('/Biens/update/{id}', [BienController::class ,'update'])->name('bien.update');
        Route::get('/Biens/delete/{id}', [BienController::class ,'destroy'])->name('bien.destroy');
        Route::get('/Biens/export', [BienController::class, 'export']);
        Route::post('/Biens/import', [BienController::class, 'fileImport']);

    });
});
