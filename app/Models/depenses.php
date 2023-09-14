<?php

namespace App\Models;
use App\Models\personnels;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depenses extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'montant',
        'date_depense',
        'personnels_id',
    ];

    function Personnel(){
        return $this->belongsTo(personnels::class, 'personnels_id');
       }
}
