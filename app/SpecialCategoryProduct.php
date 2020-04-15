<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialCategoryProduct extends Model
{
    protected $fillable = ['refference'];
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
