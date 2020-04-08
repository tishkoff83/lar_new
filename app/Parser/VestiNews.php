<?php

namespace App\Parser;

use Symfony\Component\DomCrawler\Crawler;
use App\News;
use App\Category;
use Auth;

class VestiNews implements ParseContract
{
    use ParseTrait;
    public $crawler;

    public function __construct()
    {
        set_time_limit(0);
        header('Content-Type: text/html; charset=utf-8');
    }

    public function getParse($path)
    {
        $url = 'https://www.vesti.ru/news';
        $html = file_get_contents($url);
        $this->crawler = new Crawler($html);
        $this->crawler->filter('.b-item__pic-wrapper')->each(function (Crawler $node, $i) {
            $uri = $node->attr('href');
            $url = 'https://www.vesti.ru' . $uri;
            $urlnews = $this->getNews($url);

        });
    }

    public function getNews($url)
    {
        $news = $url;
        $html = file_get_contents($news);
        //dd($news);
        $this->crawler = new Crawler($html);
        $this->crawler->filter('.news-wrapper_')->each(function (Crawler $node, $i) {
            $title = $this->text($node, "h1");
            $body = $this->html($node, "p");
        });
       $this->crawler->filter('.article__img img')->each(function (Crawler $node, $i) {
            $image = $node->image()->getUri();
       });

//        $this->crawler->filter('.article__img img')->each(function (Crawler $node, $i) {
//            $image = $this->image($node, 'src')->getUri();
//            sleep(1);
//        });
    }
//    public function getParse($path)
//    {
//        $url = 'https://www.vesti.ru/news';
//        $html = file_get_contents($url);
//        $this->crawler = new Crawler($html);
//        $this->crawler->filter('.b-item__pic-wrapper')->each(function (Crawler $node, $i) {
//            $uri = $node->attr('href');
//            $url = 'https://www.vesti.ru' . $uri;
//            $urlnews = $this->getNews($url);
//
//        });
//    }
//
//    public function getNews($url) {
//
//        $news = $url;
//        $html = file_get_contents($news);
//        $this->crawler = new Crawler($html);
//
//        //Get Category news
//        $this->crawler->filter('.spec')->each(function (Crawler $node, $i) {
//            $cat = $node->text("href");
//        });
//
//        // Get Title news.
//        $this->crawler->filter('.article__title')->each(function (Crawler $node, $i) {
//            $title = $node->text("h1");
//        });
////
//        // Get Text news
//        $this->crawler->filter('.js-mediator-article')->each(function (Crawler $node, $i) {
//            $body = $node->html("p");
//        });
//
//        // Get Image URL
//        $this->crawler->filter('.article__img img')->each(function (Crawler $node, $i) {
//            $pic = $node->image()->getUri();
//        });
//
//    }

}
