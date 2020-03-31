<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getOne($url=null)
    {
        $category = Category::where('url', $url)->first();
        return view('category', compact('category'));
    }
}
