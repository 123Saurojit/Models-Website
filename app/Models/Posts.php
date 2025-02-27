<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes ;
    
    protected $guarded=[''];


    // public function category()
    // {
    //     return $this->belongsTo(Category::class);

    // }

    // public function author()
    // {
    //     return $this->belongsTo(Author::class);

    // }


    public function celebrity()
    {
        return $this->belongsTo(Celebrity::class);

    }

        
}
