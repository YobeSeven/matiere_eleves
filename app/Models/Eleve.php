<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];

    public function matieres(){
        return $this->belongsToMany(Matiere::class , "eleve_matieres");
    }
}
