<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountTypeRequest;
use App\Models\AccountType;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{
    /**sadasdasd
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AccountType::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountTypeRequest $request)
    {
        return AccountType::Create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function show(AccountType $accountType)
    {
        return AccountType::find($accountType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountType $accountType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountType  $accountType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountType $accountType)
    {
        return AccountType::destroy($accountType);
    }
}
