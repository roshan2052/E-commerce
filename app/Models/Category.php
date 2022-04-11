<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','rank','image','short_description','description','meta_title','meta_keyword','meta_description','status','created_by','updated_by'
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
}
