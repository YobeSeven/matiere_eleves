<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\EleveMatiere;
use App\Models\Matiere;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        $matieres = Matiere::all();
        $eleve_matieres = EleveMatiere::all();
        return view("home" , compact("eleves" , "matieres" , "eleve_matieres"));
    }
}
