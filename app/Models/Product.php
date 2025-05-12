<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   protected $fillable = [
    // Product Details
    'name',
    'description',
    'type',

    // Origin
    'region',
    'brand',
    'category',

    // Pricing
    'cost_price',
    'rrp',

    // Inventory
    'sku',
    'stock_quantity',

    // Scale
    'unit_quantity',
    'package_type',
    'uom',

    // Image
    'image_path',
];

}
