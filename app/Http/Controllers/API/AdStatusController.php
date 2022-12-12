<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AdStatus;
use Illuminate\Http\Request;

class AdStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AdStatus::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO ADD THE AD STATUS REQUEST HERE
        return AdStatus::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdStatus  $adStatus
     * @return \Illuminate\Http\Response
     */
    public function show(AdStatus $adStatus)
    {
        return AdStatus::find($adStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdStatus  $adStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdStatus $adStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdStatus  $adStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdStatus $adStatus)
    {
        return AdStatus::destroy($adStatus);
    }
}
