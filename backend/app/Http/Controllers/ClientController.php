<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
//        foreach ($categorys as $category) {
//            dd($category->hasSubCategories()->get());
//        }
        return view('user.index', compact('categorys'));
    }
}
