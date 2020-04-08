<?php

namespace App\Parser;

use Illuminate\Support\Facades\DB;
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

//    public function getNews($url)
//    {
//        $news = $url;
//        $html = file_get_contents($news);
//        //dd($news);
//        $this->crawler = new Crawler($html);
//        $this->crawler->filter('.news-wrapper_')->each(function (Crawler $node, $i) {
//            $title = $this->text($node, "h1");
//            $body = $this->html($node, "p");
//        });
//       $this->crawler->filter('.article__img img')->each(function (Crawler $node, $i) {
//            $image = $node->image()->getUri();
//       });
//    }

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
    public function getNews($url)
    {

        $news = $url;
        $html = file_get_contents($news);
        $this->crawler = new Crawler($html);

        //Get Category news
        $cat = $this->crawler->filter('.spec')->each(function (Crawler $node, $i) {
            return $node->text("href");
        });


        // Get Title news.
        $title = $this->crawler->filter('.article__title')->each(function (Crawler $node, $i) {
            return $node->text("h1");
        });

        // Get Text news
        $body = $this->crawler->filter('.js-mediator-article')->each(function (Crawler $node, $i) {
            return $node->html("p");
        });

        // Get Image URL
        $image = $this->crawler->filter('.article__img img')->each(function (Crawler $node, $i) {
            return $node->image()->getUri();
        });

        $content = [
            'origin_link' => $news,
            // 'cat' => $cat,
            'title' => $title,
            'body' => $body,
            'image' => $image,
        ];

        // return $content;

        $project = new News();
        News::saved($project);

//        public function create_project($content)
//    {
//        $title = $content['title'];
//        $body = $content['bo'];
//        $url = $data['url'];
//        $author = $data['author'];
//        $create_date = $data['create_date'];
//        $update_date = $data['update_date'];
//
//        return DB::insert('insert into st_projects (title, description, url, author, create_date, update_date) values (?, ?, ?, ?, ?, ?)', [$title, $description, $url, $author, $create_date, $update_date]);
//    }


//        DB::table('news')->insert([
//            // 'origin_link' => $news,
//            'title' => $title,
//            'body' => $body,
//            'image' => $image,
//        ]);

       // dd($content);

    }

}
