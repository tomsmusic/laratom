<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['Title','Post','category_id','author','image'];
    
    public function category()
    {
       return $this->belongsTo('App\Models\Category','category_id');
    }
}
