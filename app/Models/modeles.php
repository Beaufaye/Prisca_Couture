<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_modele',
        'image',
        'class',
    ];
}
