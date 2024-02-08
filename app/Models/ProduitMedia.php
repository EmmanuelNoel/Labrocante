<?php

namespace App\Models;

use App\Traits\UUID;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProduitMedia extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
        'path',
        'produit_id',
        'created_at',
        'updated_at'

    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
