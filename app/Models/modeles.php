<?php

namespace App\Models;
use App\Models\couture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_modele',
        'image',
    ];

    function Couture(){
        return $this->hasOne(couture::class);
    }
}
