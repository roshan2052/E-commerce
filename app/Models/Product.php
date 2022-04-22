<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','sub_category_id','name','slug','code','price','stock','quantity','feature_key','flash_key','image','short_description','description','meta_title','meta_keyword','meta_description','status','created_by','updated_by'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'product_attribute');
    }
}
