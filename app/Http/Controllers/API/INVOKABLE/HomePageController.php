<?php

namespace App\Http\Controllers\API\INVOKABLE;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\CategoryResource;
use App\Http\Resources\API\SpcialAdResource;
use App\Models\Ad;
use App\Models\MainCategory;
use App\Models\SpcialAd;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //for spcified the top ad(admin) in the home page that need to be fixed and stady...then spcifed the moving one
        if ($request->query('lang') == 'ar') {
            $GoldenSpcialAd = SpcialAd::where('is_golden', 1)->get(['spcial_ad_id', 'ar_title', 'ar_desc', 'is_golden', 'duration', 'picture', 'user_id']);
        } else if ($request->query('lang') == 'en') {
            $GoldenSpcialAd = SpcialAd::where('is_golden', 1)->get(['spcial_ad_id', 'en_title', 'en_desc', 'is_golden', 'duration', 'picture', 'user_id']);
        }
        if ($request->query('lang') == 'ar') {
            $SpcialAd = SpcialAd::latest()->get(['spcial_ad_id', 'ar_title', 'ar_desc', 'is_golden', 'duration', 'picture', 'user_id'])->take(5);
        } else if ($request->query('lang') == 'en') {
            $SpcialAd = SpcialAd::latest()->get(['spcial_ad_id', 'en_title', 'en_desc', 'is_golden', 'duration', 'picture', 'user_id'])->take(5);
        }
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Successfull Request',
            'data' => [
                'GoldenSpcialAd' => SpcialAdResource::collection($GoldenSpcialAd),
                'SpcialAd' => SpcialAdResource::collection($SpcialAd),
            ],
        ], 200);
    }
}
