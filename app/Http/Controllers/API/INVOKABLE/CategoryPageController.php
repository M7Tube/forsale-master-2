<?php

namespace App\Http\Controllers\API\INVOKABLE;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return MainCategory::paginate(8);
    }
}
