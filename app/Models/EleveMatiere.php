<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EleveMatiere extends Model
{
    use HasFactory;

    protected $fillable = [
        "eleve_id",
        "matiere_id",
    ];

    public function eleve(){
        return $this->belongsTo(Eleve::class);
    }

    public function matiere(){
        return $this->belongsTo(Matiere::class);
    }
}
