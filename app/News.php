<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'title', 'description', 'image', 'url', 'user_id', 'category_id'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
