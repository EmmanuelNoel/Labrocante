<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory, UUID;

    protected $fillable = [
        'id',
        'nom',
        'slug',
        'description',
        'details',
        'prix',
        'quantity',
        'status',
        'category_product_id',
        'created_at',
        'updated_at'

    ];

    public function category()
    {
        return $this->hasOne(CategoryProduct::class, 'id', 'category_product_id');
    }

    public function medias()
    {
        return $this->hasMany(ProduitMedia::class);
    }


}
