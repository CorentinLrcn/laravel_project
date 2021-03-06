<?php

use App\Http\Controllers\ContributionController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\MissionLineController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\TransactionController;
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

/*
Route de base Laravel
*/
Route::get('/', function () {
    return view('welcome');
});



/*
Routes pour les organisations
*/
Route::get('/ajoutOrganisations', function() {
    return view('formAddOrganisation');
});

Route::post('/ajoutOrganisations', [OrganisationController::class, 'addOrganisation']);

Route::get('/organisations', [OrganisationController::class, 'organisations'])->name('organisations');

Route::get('/supprimerOrganisation/{id}', [OrganisationController::class, 'deleteOrganisation']);

Route::get('/modifierOrganisation/{id}', [OrganisationController::class, 'organisationFormUpdate']);

Route::post('/modifierOrganisation/{id}', [OrganisationController::class, 'updateOrganisation']);



/*
Routes pour les missions
*/
Route::get('/missions', [MissionController::class, 'missions'])->name('missions');

Route::get('/organisations/ajoutMissions/{id}', function() {
    $id = request('id');
    return view('formAddMission')->with('id', $id);
});

Route::post('/organisations/ajoutMissions/{id}', [MissionController::class, 'create']);

Route::get('/organisations/missions/{id}', [MissionController::class, 'voirMissionForId']);

Route::get('/organisations/missions/imprimerDevis/{id_mission}', [MissionController::class, 'getInfoMissionForDevis']);

Route::get('/organisations/missions/imprimerFactureAccompte/{id_mission}', [MissionController::class, 'getInfoMissionForDeposit']);

Route::get('/organisations/missions/imprimerFactureSolde/{id_mission}', [MissionController::class, 'getInfoMissionForSolde']);

Route::get('/organisations/missions/imprimerFacture/{id_mission}', [MissionController::class, 'getInfoMissionForInvoice']);

Route::get('/organisations/supprimerMission/{id}', [MissionController::class, 'deleteMission']);

Route::get('/organisations/modifierMission/{id}', [MissionController::class, 'missionFormUpdate']);

Route::post('/organisations/modifierMission/{id}', [MissionController::class, 'updateMission']);


/*
Routes pour les lignes de missions
*/
Route::get('/missionLines', [MissionLineController::class, 'missionLines'])->name('missionLines');

Route::get('/organisations/missions/ajoutLigneMission/{id}', function () {
    $id = request('id');
    return view('formAddMissionLines')->with('id', $id);
});

Route::post('/organisations/missions/ajoutLigneMission/{id}', [MissionLineController::class, 'ajoutLignesMission']);

Route::get('/organisations/missions/lignesMission/{id}', [MissionLineController::class, 'voirLignesMission']);

Route::get('/organisations/missions/supprimerLigneMission/{id}', [MissionLineController::class, 'deleteMissionLine']);

Route::get('/organisations/missions/modifierLigneMission/{id}', [MissionLineController::class, 'missionLineFormUpdate']);

Route::post('/organisations/missions/modifierLigneMission/{id}', [MissionLineController::class, 'updateMissionLine']);


/*
Routes pour les transactions
*/
Route::get('/contributions', [ContributionController::class ,'contributions'])->name('contributions');



/*
Routes pour les contributions
*/
Route::get('/transactions', [TransactionController::class , 'transactions'])->name('transactions');
