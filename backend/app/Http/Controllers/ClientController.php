<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
//        $categorys = Category::query()
//            ->where('status', 1)
//            ->get();
        return view('charts-chartjs');
        //return view('tables-');
    }

    public function info()
    {
        $user = Auth::guard('user')->user();
        return view('staff.info', compact('user'));
    }

    public function category(string $slug, string $type)
    {
        $categorys = Category::query()
            ->where('status', 1)
            ->get();
        if ($type == 'sub') {
            $category = SubCategory::query()
                ->where('slug', 'like', '%' . $slug . '%')
                ->first();
            $posts = Post::query()
                ->where('category_id', $category->getKey())
                ->paginate(10);
            $nameCategory = $category->name;
        } else {
            $category = Category::query()
                ->where('slug', 'like', '%' . $slug . '%')
                ->pluck('id')
                ->toArray();
            $categoryIds = array_values($category);
            $sub_category = SubCategory::query()
                ->whereIn('category_id', $categoryIds)
                ->pluck('id')
                ->toArray();
            $sub_categoryIds = array_values($sub_category);
            $posts = Post::query()
                ->whereIn('category_id', $sub_categoryIds)
                ->paginate(10);
            $nameCategory = $slug;
        }

        foreach ($posts as $post) {
            $post->avatar = getenv('APP_URL') . '/upload/Posts/' . $post->avatar;
        }
        return view('user.category',compact('posts', 'categorys', 'nameCategory'));
    }

    public function detail(string $slug, Post $post)
    {
        $categorys = Category::query()
            ->where('status', 1)
            ->get();
        $category = SubCategory::query()
            ->where('slug', 'like', '%' . $slug . '%')
            ->first();
        $posts = Post::query()
            ->where('category_id', $category->getKey())
            ->where('id', '<>', $post->getKey())
            ->latest()
            ->limit(10)
            ->get();

        $post = Post::query()
            ->where('id', '=', $post->getKey())
            ->first();
        foreach ($posts as $post) {
            $post->avatar = getenv('APP_URL') . '/upload/Posts/' . $post->avatar;
        }
        return view('user.detail',compact('post', 'categorys', 'posts', 'category'));
    }
}
