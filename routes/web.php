<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\RechercheController;


Route::get('/', function () {
    return view('layout');
});

Route::resource('filieres',FiliereController::class);
Route::resource('groupes',GroupeController::class);
Route::resource('stagiaires',StagiaireController::class);
Route::resource('formateurs',FormateurController::class);
Route::get('/Recherche', function () {
    return view('recherche.index');
})->name('Recherche');

Route::get('/Recherche/RechercheGroupeStagiairesAnneeFormation',
            [RechercheController::class , 'RechercheGroupeStagiairesAnneeFormation']
        )->name('Recherche.RechercheGroupeStagiairesAnneeFormation');

Route::get('/Recherche/RechercheStagiairesParGroupe',
            [RechercheController::class , 'RechercheGroupe']
        )->name('Recherche.RechercheGroupe');

Route::post('/Recherche/RechercheStagiairesParGroupe',
            [RechercheController::class , 'RechercheStagiairesParGroupe']
        )->name('Recherche.RechercheStagiairesParGroupe');

Route::get('/Recherche/RechercheFormateurParMatricule',
            [RechercheController::class , 'RechercheFormateur']
        )->name('Recherche.RechercheFormateur');

Route::post('/Recherche/RechercheFormateurParMatricule',
            [RechercheController::class , 'RechercheFormateurParMatricule']
        )->name('Recherche.RechercheFormateurParMatricule');

Route::get('/Recherche/RechercheNbStagiaireParGroupe',
        [RechercheController::class , 'RechercheNbStagiaireParGroupe']
        )->name('Recherche.RechercheNbStagiaireParGroupe');
        
Route::get('/Recherche/RechercheFormateurMinMaxSalaire',
        [RechercheController::class , 'RechercheFormateurMinMaxSalaire']
        )->name('Recherche.RechercheFormateurMinMaxSalaire');

Route::get('/Recherche/RechercheFormateurParSalaire',
        [RechercheController::class , 'RechercheFormateurParSalaires']
    )->name('Recherche.RechercheFormateurParSalaire');

Route::post('/Recherche/RechercheFormateurTranchSalaire',
        [RechercheController::class , 'RechercheFormateurTranchSalaire']
    )->name('Recherche.RechercheFormateurTranchSalaire');


