<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug'];

    public function news()
    {
       return $this->hasMany(News::class)->orderBy('created_at', 'DESC');
    }

}
