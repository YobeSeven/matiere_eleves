<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\EleveMatiereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatiereController;
use Illuminate\Support\Facades\Route;

// *----------------* //

Route::get("/" , [HomeController::class , "index"])->name("home.index");


//* FUNCTIONS : 
Route::post("/store/eleve/+/matiere/" , [EleveMatiereController::class , "store"])->name("eleveMatiere.store");

//* DELETE 
Route::delete("/delete/{eleve}/eleve" , [EleveController::class , "destroy"])->name("eleves.destroy");
Route::delete("/delete/{matiere}/matiere" , [MatiereController::class , "destroy"])->name("matieres.destroy");
Route::delete("/delete/{eleveMatiere}/eleveMatiere" , [EleveMatiereController::class , "destroy"])->name("eleveMatieres.destroy");
Route::delete("/delete/from/{eleve}/{matiere}/eleveMatiere" , [EleveMatiereController::class , "destroyFrom"])->name("eleveMatieres.destroyFrom");