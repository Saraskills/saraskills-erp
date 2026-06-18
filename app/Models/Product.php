<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id',
        'category_id',
        'brand_id',
        'unit_id',
        'tax_rate_id',
        'sku',
        'name',
        'slug',
        'description',
        'item_type',
        'cost_price',
        'selling_price',
        'track_stock',
        'has_variant',
        'has_expiry',
        'allow_decimal_qty',
        'image',
        'status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function taxRate()
    {
        return $this->belongsTo(TaxRate::class);
    }
}
