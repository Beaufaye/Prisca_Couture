<?php

namespace App\Models;
use App\Models\clients;
use App\Models\modeles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mesures extends Model
{
    use HasFactory;

    protected $guarded= [
        
    ];

    public function clients(): BelongsTo
    {
        return $this->belongsTo(clients::class);
    }

    public function modeles(): BelongsTo
    {
        return $this->belongsTo(modeles::class);
    }
}
