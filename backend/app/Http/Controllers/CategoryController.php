<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = SubCategory::query()
            ->select(['*'])
            ->latest();
        $datas = $datas->paginate(10);
        return view('admin.categories.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $resource = SubCategory::query()
            ->create([
                'name'        => $inputs['name'],
                'category_id' => $inputs['category_id'],
                'status'      => $inputs['status'],
                'slug'        => Str::slug($inputs['name'], '-'),
            ]);

        return Redirect::route('admin.categories.list')
            ->with('success', 'Đã tạo chuyên mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('categories', 'subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SubCategory $subCategory, Request $request)
    {
        $input = $request->all([
            'category_id',
            'name',
            'status'
        ]);

        $subCategory->update($input);

        return Redirect::route('admin.categories.list')
            ->with('success', 'Lưu chuyên mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $checkExists = Post::query()
            ->where('category_id', $category->getKey())
            ->exists();
        if ($checkExists) {
            return Redirect::route('admin.categories.list')
                ->with('error', 'Lưu chuyên mục thất bại');
        }
        return Redirect::route('admin.categories.list')
            ->with('success', 'Xoá chuyên mục thành công');
    }
}
