<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'filiere_id'];

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
    public function stagiaires(){
        return $this->hasMany(Stagiaire::class);
    }
    public function formateurs(){
        return $this->belongsToMany(Formateur::class)->withPivot('annee_formation');
    }
}
