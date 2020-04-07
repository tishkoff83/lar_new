<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Parser\GoogleNews;
use App\Parser\VestiNews;

class NewsController extends Controller
{
    public function getNews(){
        $news = News::all();
        foreach($news as $one){
            $obj=new GoogleNews;
            $pars=$obj->getParse($obj->title, $obj->id);
        }
    }
}
