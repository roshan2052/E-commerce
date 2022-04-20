<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','address','email','phone','logo','map_address','fb_link','insta_link','youtube_link','twitter_link','status','created_by','updated_by'
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
}
