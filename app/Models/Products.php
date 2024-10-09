<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'products';
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'origin',
        'brand',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', '_id');
    }
}