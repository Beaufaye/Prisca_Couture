<?php

namespace App\Models;
use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendez_vous extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_rdv',
    ];

    function Client(){
        return $this->belongsTo(clients::class, 'clients_id');
       }
}
