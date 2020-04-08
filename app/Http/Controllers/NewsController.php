<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Parser\GoogleNews;
use App\Parser\VestiNews;

class NewsController extends Controller
{
    public function getNews(){

        $obj = new VestiNews;
        $obj->getParse('url');
    }
}
