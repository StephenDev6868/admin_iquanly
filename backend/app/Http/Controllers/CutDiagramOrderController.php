<?php

namespace App\Http\Controllers;

use App\Models\CutDiagramOrder;
use Illuminate\Http\Request;

class CutDiagramOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cut-orders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CutDiagramOrder  $cutDiagramOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CutDiagramOrder $cutDiagramOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CutDiagramOrder  $cutDiagramOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CutDiagramOrder $cutDiagramOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CutDiagramOrder  $cutDiagramOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CutDiagramOrder $cutDiagramOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CutDiagramOrder  $cutDiagramOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CutDiagramOrder $cutDiagramOrder)
    {
        //
    }
}
