<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Parser\GoogleNews;
use App\Parser\VestiNews;

class NewsController extends Controller
{
    public function getNews()
    {

        $obj = new VestiNews;
        $obj->getParse('url');
    }


//    public function showNews()
//    {
//        $news = News::orderBy('update_at', 'DESC');
//        return view('categories', compact('news'));
//    }

//    public function categories()
//    {
//        $categories = Category::get();
//        return view('categories', compact('categories'));
//    }

//    public function catNews()
//    {
//        $news = News::get();
//        return view('category', compact('news'));
//    }
//
//    public function category($code)
//    {
//        $category = Category::where('slug', $code)->first();
//        return view('category', compact('category'));
//    }
//
//    public function news($category, $news = null)
//    {
//        return view('news', ['news' => $news]);
//    }
}
