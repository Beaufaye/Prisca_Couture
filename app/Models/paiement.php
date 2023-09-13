<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'montant',
        'acompte',
        'reste',
        'mode_paiement',
        'date_paiement',
    ];
}
