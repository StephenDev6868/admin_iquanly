<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $company = Company::all();
        $boards = Board::query()->paginate(10);
        return view('admin.boards.list', compact('company', 'boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $company = Company::all();
        return view('admin.boards.add', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'Required|max:255'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = Board::query()->create($input);

        if ($result) {
            return Redirect::route('admin.boards.list')
                ->with('success', 'Tạo phòng ban thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Board $board)
    {
        $company = Company::all();
        return view('admin.boards.edit', compact('board', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Board $board)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'Required|max:255'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = $board->update($input);

        if ($result) {
            return Redirect::route('admin.boards.list')
                ->with('success', 'Tạo phòng ban thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Board $board)
    {
        $result = $board->delete();
        if ($result) {
            return Redirect::route('admin.boards.list')
                ->with('success', 'Xoá phòng ban thành công');;
        }
    }
}
