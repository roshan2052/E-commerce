<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','status','created_by','updated_by'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
}
