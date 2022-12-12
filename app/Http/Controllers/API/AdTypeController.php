<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AdType;
use Illuminate\Http\Request;

class AdTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AdType::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO ADD THE AD TYPE REQUEST VALDITON HERE
        return AdType::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdType  $adType
     * @return \Illuminate\Http\Response
     */
    public function show(AdType $adType)
    {
        return AdType::find($adType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdType  $adType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdType $adType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdType  $adType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdType $adType)
    {
        return AdType::destroy($adType);
    }
}
