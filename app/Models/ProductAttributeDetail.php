<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeDetail extends Model
{
    protected $fillable = ['product_id','attribute_id','value'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
