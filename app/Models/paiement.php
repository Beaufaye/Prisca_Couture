<?php

namespace App\Models;
use App\Models\clients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class paiement extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'objet',
        'montant',
        'reste',
        'date_paiement',
        'clients_id',
    ];

    function Client(){
        return $this->BelongsTo(clients::class, 'clients_id');
    }
}
