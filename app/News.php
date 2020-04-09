<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'title'];


// , 'body', 'image', 'slug', 'user_id', 'category_id', 'count', 'origin_link'


//    public function create($content)
//    {
//
////        $title = $content['title'];
////        $body = $content['body'];
////        $news = $content['origin_link'];
//
////        DB::table('news')->insert([
////            'title' => $content['title'],
////            'body' => $content['body'],
////            'origin_link' => $content['origin_link'],
////        ]);
//
//       // return DB::insert('insert into st_projects (title, body, origin_link) values (?, ?, ?)', [$title, $body, $news]);
//    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
