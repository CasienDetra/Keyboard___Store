<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'attribute',
        'image',
        'category_id',
        'brand',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
