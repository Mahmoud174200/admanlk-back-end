<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCourse extends Model
{
    use HasFactory;
    protected $table="product";
    protected $fillable = [
        'product_id',
        'name',
        'price',
        'description',
        'supplier_id',
        'category_id',
        'rating',
        'discount',
        'brand',
        'img_url',
        'quantity',
        'created_at'
    ];
    
}
