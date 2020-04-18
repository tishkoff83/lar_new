<?php

namespace App\Parser;

use Symfony\Component\DomCrawler\Crawler;
use App\News;
use App\Http\Controllers\TranslitController;
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
            $dom = 'https://www.vesti.ru';
            $url = $dom . $uri;
            if (strpos($url, 'doc.html?id=') !== false) {
                $urlnews = $this->getNews($url);
            }
        });
    }


    public function getNews($url)
    {

        $news = $url;
        $htm = file_get_contents($news);
        $this->crawler = new Crawler($htm);

        sleep(1);

        $this->crawler->filter('.spec')->each(function (Crawler $node, $i) use ($news) {
            $name_cat = $this->text($node, "a");
            if ($name_cat != null && isset($name_cat)) {
                $cat = Category::where('title', $name_cat)->first();
                $cat->id;

                $this->crawler->filter('.article')->each(function (Crawler $node, $i) use ($cat, $news) {

                    $title = $this->text($node, "h1");
                    $body = $this->html($node, ".js-mediator-article");
                    $slug = (new TranslitController)->rus2translit($title);
                    $time = $this->html($node, '.article__time');

                    $node->filter('.article__img img')->each(function (Crawler $node2, $i2) use ($time, $cat, $slug, $news, $body, $title) {
                        $image = $node2->image()->getUri();
                        $pic = \App::make('\App\Libs\Imag')->url($image);

                        $obj = News::where('origin_link', $news)->first();
                        if (!$obj) {
                            $news_new = new News;
                            $news_new->origin_link = $news;
                            $news_new->title = $title;
                            $news_new->slug = $slug;
                            $news_new->time = $time;
                            $news_new->body = $body;
                            $news_new->image = $pic;
                            $news_new->category_id = $cat->id;
                            $news_new->user_id = (Auth::guest()) ? 0 : Auth::user()->id;
                            $news_new->save();
                        }

                    });
                });
            }
        });
    }
}
