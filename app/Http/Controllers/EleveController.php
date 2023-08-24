<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function destroy(Eleve $eleve){
        $eleve->delete();
        return redirect()->back();
    }
}
