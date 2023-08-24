<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\EleveMatiere;
use App\Models\Matiere;
use Illuminate\Http\Request;

class EleveMatiereController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            "eleve_id" => ["required"],
            "matiere_id" => ["required"],
        ]);

        $exist = EleveMatiere::where("eleve_id", $request->eleve_id)->where("matiere_id", $request->matiere_id)->first();

        if ($exist) {
            return redirect()->back()->with("warning", "l'eleve est deja inscris à la matiere choisis");
        } else {
            $data = [
                "eleve_id" => $request->eleve_id,
                "matiere_id" => $request->matiere_id,
            ];

            EleveMatiere::create($data);
            return redirect()->back()->with("success", "vous venez d'inscrire l'eleve à une matière");
        }
    }

    public function destroy(EleveMatiere $eleveMatiere){
        $eleveMatiere->delete();
        return redirect()->back();
    }

    public function destroyFrom(Eleve $eleve , Matiere $matiere){
        $eleveMatiere = EleveMatiere::where("eleve_id" , $eleve->id)->where("matiere_id" , $matiere->id)->first();
        $eleveMatiere->delete();
        return redirect()->back();
    }
}
