<?php

use App\Http\Controllers\gestion_de_sortie_terrain\butController;
use App\Http\Controllers\gestion_de_sortie_terrain\butSortiController;
use App\Http\Controllers\gestion_de_sortie_terrain\etatSortieController;
use App\Http\Controllers\gestion_de_sortie_terrain\sortieController;
use App\Http\Controllers\GestionDesUtilisateurs\adresseController;
use App\Http\Controllers\GestionDesUtilisateurs\habilitationController;
use App\Http\Controllers\GestionDesUtilisateurs\personnelController;
use App\Http\Controllers\GestionDesUtilisateurs\personneMoraleController;
use App\Http\Controllers\GestionDesUtilisateurs\personnePhysiqueController;
use App\Http\Controllers\GestionDesUtilisateurs\posteController;
use App\Http\Controllers\GestionDesUtilisateurs\profilController;
use App\Http\Controllers\GestionDesUtilisateurs\utilisateurController;
use App\Http\Controllers\GestionDossier\affectationController;
use App\Http\Controllers\GestionDossier\commentaireDossierController;
use App\Http\Controllers\GestionDossier\commentaireFichierController;
use App\Http\Controllers\GestionDossier\dossierController;
use App\Http\Controllers\GestionDossier\dossiersController;
use App\Http\Controllers\GestionDossier\etapeController;
use App\Http\Controllers\GestionDossier\etapeDossierController;
use App\Http\Controllers\GestionDossier\fichierController;
use App\Http\Controllers\GestionDossier\incompatible;
use App\Http\Controllers\GestionDossier\observationController;
use App\Http\Controllers\GestionDossier\parcelleController;
use App\Http\Controllers\GestionDossier\personneDossierController;
use App\Http\Controllers\GestionDossier\rolePersonneController;
use App\Http\Controllers\GestionDossier\typeBornageController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

/* Route::get('/acceuil/dossier', function () {
    return view('acceuil.dossier');
})->name('dossier'); */

//Route::controller();
Route::get('/acceuil/sortie', function () {
    return view('acceuil.sortie');
})->name('sortie');
Route::get('/acceuil/client', function () {
    return view('acceuil.client');
})->name('client');
//Route::get('/acceuil/dossierEnCours', function () {
//    return view('acceuil.dossierEnCours');
//})->name('dossierEnCours');

Route::get('/parametrage', function () {
    return view('parametre');
})->name('parametre');


/*
|**************************************** routes resources*********************************************|
  |--->> cette parti comporte les differents routes resource <<---|
|*********************************************************************************************|
*/

//Route::post('/ajoutParcelle', [incompatible::class, 'ajoutParcelle'])->name('Ajoutparcelle');

Route::any('/bornage-anuller/{id}', [etapeDossierController::class, 'annuler'])->name('Annuler');

Route::resource('type de bornage', typeBornageController::class);

Route::resource('but', butController::class);

Route::get('/bornage-suspendu/{id}', [etapeDossierController::class, 'suspendre'])->name('Suspendu');
Route::get('/bornage-suspension-annuler/{id}', [etapeDossierController::class, 'annul_suspension'])->name('annul_suspension');

Route::resource('habilitation', habilitationController::class);

Route::resource('etat de sorti', etatSortieController::class);

Route::resource('etape', etapeController::class);

Route::resource('parcelle', parcelleController::class);

Route::resource('poste', posteController::class);

Route::resource('affectation', affectationController::class);
//Route::post('/nouveau/dossier', [affectationController::class, 'reaffectation'])->name('reaffectation');


Route::resource('adresse', adresseController::class);

Route::resource('personne morale', personneMoraleController::class);

Route::resource('personne physique', personnePhysiqueController::class);

Route::resource('personnel', personnelController::class);

Route::resource('dossier', dossierController::class);

//Route::resource('dossiers', dossiersController::class);

Route::get('/dossiers', [dossierController::class, 'dossierAcceuil'])->name('dossier');


 //Route::post('/nouveau/dossier', [dossierController::class, 'store'])->name('nouveau');
Route::get('/dossierFinaliser', [dossierController::class, 'dossierFinaliser'])->name('dossierFinaliser');
Route::get('/dossierEnCours', [dossierController::class, 'dossierEnCours'])->name('dossierEnCours');
Route::get('/dossierSuspendu', [dossierController::class, 'dossierSuspendu'])->name('dossierSuspendu');
Route::get('/dossierAnnuler', [dossierController::class, 'dossierAnnuler'])->name('dossierAnnuler');

Route::resource('etape dossier', etapeDossierController::class);


Route::resource('profil', profilController::class);

Route::resource('fichier', fichierController::class);

Route::get('/sorties', [sortieController::class, 'sorties'])->name('sortie');
Route::resource('sortie', sortieController::class);


Route::resource('but de sortie', butSortiController::class);

Route::get('/clients', [utilisateurController::class, 'clients'])->name('client');
Route::resource('utilisateur', utilisateurController::class);

Route::resource('commentaire dossier', commentaireDossierController::class);

Route::resource('commentaire fichier', commentaireFichierController::class);

Route::resource('role personne', rolePersonneController::class);

Route::resource('personne dossier', personneDossierController::class);

Route::resource('observation', observationController::class);
