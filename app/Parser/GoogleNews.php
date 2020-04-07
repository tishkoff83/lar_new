<?php

namespace App\Parser;

use Symfony\Component\DomCrawler\Crawler;
use App\News;
use Auth;

class GoogleNews implements ParseContract
{
    use ParseTrait;
    public $crawler;

    public function __construct()
    {
        set_time_limit(0);
        header('Content-Type: text/html; charset=utf-8');
    }


    public function getParse($catalog="Belarus", $cat_id=null)
    {
        $ff = 'https://news.google.com/search?q='.$catalog.'&hl=ru&gl=RU&ceid=RU:ru';
        $file = file_get_contents($ff);
        $this->crawler = new Crawler($file);
        //$tt = $this->html($this->crawler, '.images_table');
        $this->crawler->filter('.zQTmif')->each(function (Crawler $node, $i) {
            $name = $this->text($node, "h3");
            // $body = $this->text($node, ".esc-lead-snippet-wrapper");
            // $picture = $this->attr($node, ".esc-thumbnail-image", "src");
            $obj = new News;
            $obj->name = $name;
            // $obj->body = $body;
            // $obj->picture = $picture;
            // $obj->catalog = $cat_id;
            $obj->user_id = (Auth::guest())?0:Auth::user()->id;
            $obj->save();
            sleep(1);
        });
    }
}
