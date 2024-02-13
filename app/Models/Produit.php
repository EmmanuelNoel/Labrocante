<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'user_id',
        'category_product_id',
        'produit_status_id',
        'created_at',
        'updated_at'

    ];

    public function category() : HasOne
    {
        return $this->hasOne(CategoryProduct::class, 'id', 'category_product_id');
    }

    public function medias() : HasMany
    {
        return $this->hasMany(ProduitMedia::class);
    }

    public function status() : HasOne
    {
        return $this->hasOne(ProduitStatus::class, 'id', 'produit_status_id');
    }

    public function author() : HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
