<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'barcode',
        'short_desc',
        'long_desc',
        'quantity',
        'price' ,
        'image',
        'category_id'
    ];
}
