<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $categories = Category::query()
            ->latest()
            ->get();

        $sub_categories = SubCategory::query()
            ->latest()
            ->get();

        $posts = Post::query()
            ->latest()
            ->get();

        $sitemap = app()->make('sitemap');
        // Cache kết quả 60 phút
        $sitemap->setCache('hapo.sitemap.index', 60);
        if (!$sitemap->isCached()) {
            $sitemap->add(url('/'), Carbon::now(), 1, 'daily');
            // add bài viết
            foreach ($categories as $category) {
                $sitemap->add(route('user.category.list', ['slug' => $category->slug, 'type' => 'parent']), $category->updated_at, 1, 'daily');
            }
            foreach ($sub_categories as $sub_category) {
                $sitemap->add(route('user.category.list', ['slug' => $sub_category->slug, 'type' => 'sub']), $sub_category->updated_at, 1, 'daily');
            }
            foreach ($posts as $post) {
                //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
                $sitemap->add(route('user.category.detail', ['slug' => $post->category->slug, 'post' => $post->id]), $post->updated_at, 2, 'daily');
            }
        }
        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        //dd($sitemap->render('html'));
        return $sitemap->render('xml');
    }
}
