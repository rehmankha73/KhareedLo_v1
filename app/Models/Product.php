<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'product_category_id',
        'product_code',
        'name',
        'description',
        'price',
        'wholesale_price',
        'discount',
        'stock',
        'mini_stock',
        'in_stock'
    ];

    protected $casts = [
        'in_stock' => 'boolean'
    ];

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function generateCode($num = 6)
    {
        $string = '0123456789';
        $code = '';
        for ($i = 0; $i < $num; $i++) {
            $code .= substr($string, (rand() % (strlen($string))), 1);
        }
        return $code;
    }
}

