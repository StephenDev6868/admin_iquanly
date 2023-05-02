<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class MainCategoryController extends Controller
{
    public function index()
    {
        $datas = Category::query()->latest()->paginate(10);
        return view('admin.main_categories.list', compact('datas'));
    }

    public function create()
    {
        return view('admin.main_categories.add');
    }

    public function store(Request $request)
    {
        $input = $request->all([
            'name',
            'status'
        ]);

        Category::query()->create($input);

        return Redirect::route('admin.mainCategories.list')
            ->with('success', 'Đã tạo chuyên mục chính thành công');
    }

    public function show(Category $category)
    {
        return view('admin.main_categories.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $input = $request->all([
            'name',
            'status'
        ]);
        $input['slug'] = Str::slug($input['name'], '-');
        $category->update($input);
        return Redirect::route('admin.mainCategories.list')
            ->with('success', 'Lưu chuyên mục chính thành công');
    }

    public function delete(Category $category)
    {
        if ($category->hasSubCategories()->count() > 0) {
            return Redirect::route('admin.mainCategories.list')
                ->with('error', 'không thể xoá vì có chưa chuyên mục con');
        }
        $category->initializeSoftDeletes();
        return Redirect::route('admin.mainCategories.list')
            ->with('success', 'Xoá chuyên mục chính thành công');
    }
}
