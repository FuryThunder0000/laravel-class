<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur_Groupe extends Model
{
    use HasFactory;
    protected $table = 'formateur_groupe';
    protected $fillable = ['formateur_id', 'groupe_id','annee_formation'];
}
