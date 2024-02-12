<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function produits() : BelongsTo
    {
        return $this->belongsTo(Produit::class, 'category_product_id', 'id');
    }

}
