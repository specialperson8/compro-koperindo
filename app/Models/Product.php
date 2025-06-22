<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

        protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'description',
        'main_image',
        'is_featured',
    ];

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

     public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
