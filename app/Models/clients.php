<?php

namespace App\Models;
use App\Models\couture;
use App\Models\rendez_vous;
use App\Models\mesures;
use App\Models\paiement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'adresse',
        'telephone',
        'sexe',
    ];

    function Couture(){
        return $this->hasOne(couture::class);
    }

    function Mesure(){
        return $this->hasOne(mesures::class);
       }
    
       function Rendez_vous(){
        return $this->hasOne(rendez_vous::class);
       }

       function Paiement(){
        return $this->hasOne(paiement::class);
       }
}
