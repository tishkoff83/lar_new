<?php

namespace App\Http\Controllers;

use App\Maintext;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function getUrl($url = null)
    {
        $obj = Maintext::where('url', $url)->first();
        return view('static.static', compact('url'));

    }
}
