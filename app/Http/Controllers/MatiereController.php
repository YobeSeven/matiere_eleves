<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function destroy(Matiere $matiere){
        $matiere->delete();
        return redirect()->back();
    }
}
