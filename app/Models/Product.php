<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'name',
        'description',
        'unit_price',
        'wholesale_price',
        'initial_stock',
        'current_stock',
        'in_stock',
        'featured_image',
        'image_1',
        'image_2',
        'image_3',
        'image_4',

        // Seo related tags
        'meta_title',
        'meta_keywords',
        'meta_description',
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

