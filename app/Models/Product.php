<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
  use HasFactory;
  
    protected $fillable = [
        'name_produk', 'sub_judul', 'price', 'description','image'
    ];

    public function slider(){
      return $this->hasMany(ProductSlider::class);
    }
}
