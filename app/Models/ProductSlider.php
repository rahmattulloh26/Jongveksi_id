<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'image_path',
        'alt',
        'title',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}
