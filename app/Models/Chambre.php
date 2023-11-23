<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{

    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'nom_ch',
        'prix',
        'lits',
        'adultes',
        'enfants',
        'statut',
        

    ];
}
