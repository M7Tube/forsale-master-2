<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Notifcation;
use Illuminate\Http\Request;

class NotifcationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Notifcation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Notifcation::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notifcation  $notifcation
     * @return \Illuminate\Http\Response
     */
    public function show(Notifcation $notifcation)
    {
        return Notifcation::find($notifcation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notifcation  $notifcation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifcation $notifcation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notifcation  $notifcation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifcation $notifcation)
    {
        return Notifcation::destroy($notifcation);
    }
}
