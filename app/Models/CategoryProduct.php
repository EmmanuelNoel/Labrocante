<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProduct extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
        'slug',
        'description',
        'status',
        'created_at',
        'updated_at'

    ];

    public function produits()
    {
        return $this->belongsTo(Produit::class);
    }

}
