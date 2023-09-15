<?php

namespace App\Models;
use App\Models\clients;
use App\Models\modeles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class couture extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_depot',
        'date_recuperation',
        'modeles_id',
        'clients_id',
    ];

    function Client(){
        return $this->belongsTo(clients::class, 'clients_id');
    }

    function Modele(){
        return $this->belongsTo(modeles::class, 'modeles_id');
    }

    
}
