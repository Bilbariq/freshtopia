<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'image', 
        'price', 
        'is_best_seller', 
        'category_id',
        'ingredients',
        'tags'
    ];

    protected $casts = [
        'ingredients' => 'array',
        'tags' => 'array',
        'is_best_seller' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}