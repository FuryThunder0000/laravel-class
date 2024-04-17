<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','nom', 'prenom', 'genre', 'date_naissance'];


    public function groupes(){
        return $this->belongsToMany(Groupe::class)->withPivot('annee_formation');
    }
}
