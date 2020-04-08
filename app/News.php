<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'title', 'body', 'image', 'slug', 'user_id', 'category_id', 'count', 'origin_link'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
