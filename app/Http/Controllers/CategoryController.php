<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

//    public function getAll()
//    {
//        $news = News::paginate(20);
//        return view('index', compact('news'));
//    }

    public function categories($url = null)
    {
        $categories = Category::where('slug', $url)->first()->paginate(10);
      //dd($categories->links());
        return view('categories', compact('categories'));
    }


}
