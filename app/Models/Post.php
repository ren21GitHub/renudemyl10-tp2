<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,
        SoftDeletes;

    // fillable
    // guarded

// fillable can be mass assignable
    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'user_id',
        'category_id',
        'views',
    ];

// guarded cannot be mass assignable
    // protected $guarded = [
    //     'title'
    // ];

    //ADDING ONE TO ONE INVERSE RELATIONSHIP TO USE IN CATEGORY MODEL
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //MANY TO MANY RELATIONSHIP
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
