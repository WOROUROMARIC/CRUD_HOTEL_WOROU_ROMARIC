<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom' ,
        'Nom_de_lHotel' ,
        'description_de_lHotel',
        'nom_de_la_chambre' ,
        'Prix' ,
        'Nombre de lits' ,
        'max_dadultes' ,
        'Enfants maximum autorisé',
        'Attributs',
       'Status' ,
    ];
}
