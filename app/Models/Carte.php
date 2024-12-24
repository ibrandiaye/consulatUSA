<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','date_naiss','lieu_naiss','date_expiration','sexe','nin','numero'
    ];
}
