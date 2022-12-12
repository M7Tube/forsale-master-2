<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FilterType;
use Illuminate\Http\Request;

class FilterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FilterType::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return FilterType::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FilterType  $filterType
     * @return \Illuminate\Http\Response
     */
    public function show(FilterType $filterType)
    {
        return FilterType::find($filterType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FilterType  $filterType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FilterType $filterType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FilterType  $filterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FilterType $filterType)
    {
        return FilterType::destroy($filterType);
    }
}
