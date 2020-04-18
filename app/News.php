<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'title', 'body', 'origin_link', 'slug', 'category_id', 'user_id', 'time'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
