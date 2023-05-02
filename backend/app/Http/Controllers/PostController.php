<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\Upload\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected $folder_name = 'Posts';

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->only([
            'key_word',
            'status'
        ]);

        $userOwnPost = optional(Auth::guard('user')->user()) ?? '';

        $posts = Post::query()
            ->select(['*'])
            ->latest();

        if($userOwnPost->role !== 1) {
            $posts = $posts->where('user_id', $userOwnPost->id);
        }

        if (!empty($params['key_word'])) {
            $posts = $posts->where(function ($query) use ($params) {
                $query->where('title', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('content', 'like', '%' . $params['key_word'] . '%');
            });
        }

        if (!empty($params['status'])) {
            $posts = $posts->where('status', $params['status']);
        }

        $posts = $posts->paginate(10);

        return view('admin.posts.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = SubCategory::all();
        return View('admin.posts.add', compact('categorys'));
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

        $validator = Validator::make($inputs, [
            'title'   => 'required|max:255',
            'content' => 'required',
            'avatar'  => 'required|max:2048|mimes:jpeg,jpg,png',
            'status'  => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $file_avatar = $request->file('avatar') ?? '';
        if ($file_avatar) {
            $file_avatar_url = UploadService::upload($this->folder_name, $file_avatar);
            $inputs['avatar'] = $file_avatar_url;
        }

        $inputs['user_id'] = Auth::guard('user')->user()->id;
        $result = Post::query()
            ->create($inputs);

        return Redirect::route('admin.posts.list')
            ->with('success', 'Tạo bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categorys = SubCategory::all();
        $post->avatar = getenv('APP_URL') . '/upload/' . $this->folder_name . '/' . $post->avatar;
        return View('admin.posts.edit', compact('post', 'categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Post  $post
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Post $post, Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'title'   => 'required|max:255',
            'content' => 'required',
            'avatar'  => 'max:2048|mimes:jpeg,jpg,png',
            'status'  => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $file_avatar = $request->file('avatar') ?? '';
        if ($file_avatar) {
            // delete old avatar
            UploadService::deleteFile($this->folder_name, $post->avatar);
            $file_avatar_url = UploadService::upload($this->folder_name, $file_avatar);
            $inputs['avatar'] = $file_avatar_url;
        }

        $result = $post->update($inputs);

        return Redirect::route('admin.posts.list')
            ->with('success', 'Cập nhập bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return Redirect::route('admin.posts.list')
            ->with('success', 'Xoá bài viết thành công');
    }
}
