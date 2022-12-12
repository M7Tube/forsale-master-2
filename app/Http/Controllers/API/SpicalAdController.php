<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SpcialAd;
use Illuminate\Http\Request;

class SpicalAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SpcialAd::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return SpcialAd::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpcialAd  $spcialAd
     * @return \Illuminate\Http\Response
     */
    public function show(SpcialAd $spcialAd)
    {
        return SpcialAd::find($spcialAd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpcialAd  $spcialAd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpcialAd $spcialAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpcialAd  $spcialAd
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpcialAd $spcialAd)
    {
        return SpcialAd::destroy($spcialAd);
    }
}
