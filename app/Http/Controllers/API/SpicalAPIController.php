<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\CarResource;
use App\Http\Resources\API\FavoriteResource;
use App\Http\Resources\API\JobsResource;
use App\Http\Resources\API\MobileResource;
use App\Http\Resources\API\MyAdResource;
use App\Http\Resources\API\RealEstateResource;
use App\Http\Resources\API\SingleCarResource;
use App\Http\Resources\API\SingleJobResource;
use App\Http\Resources\API\SingleMobileResource;
use App\Http\Resources\API\SingleRealEstateResource;
use App\Http\Resources\API\SpcialAdResource;
use App\Http\Resources\API\TermsResource;
use App\Models\Ad;
use App\Models\Favorite;
use App\Models\Notifcation;
use App\Models\Rate;
use App\Models\SpcialAd;
use App\Models\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\MessageTrait;
use App\Models\Cars;
use App\Models\Jobs;
use App\Models\Mobiles;
use App\Models\RealEstate;
use Carbon\Carbon;
use Image;

class SpicalAPIController extends Controller
{
    use MessageTrait;

    // public function testimage()
    // {
    //     $name = 'defualt' . time() . '.jpg';
    //     $img = Image::make(storage_path('app/img/defualt.png'))->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
    //     return $img->response('jpg');
    //sfd
    // }
    public function showAd($lang, $category, $adid, $user_id = null)
    {
        //validate the parameters
        $request = [
            'category' => $category,
            'adid' => $adid,
            'user_id' => $user_id,
        ];

        $validator = Validator::make($request, [
            'category' => ['required', 'integer'],
            'adid' => ['required', 'integer'],
            'user_id' => ['nullable', 'integer', 'exists:users,user_id'],
        ]);

        if ($validator->fails())
            return $validator->validated();
        if ($category == 1) { //this ad belong to cars category
            if ($lang == 'ar') {
                $ad = Cars::where('car_id', $adid)->first([
                    'ar_title',
                    'ar_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'price',
                    'picture',
                    'is_special',
                    'watch_count',
                    'manufacturing_year',
                    'kilometrag',
                    'car_type_id',
                    'car_status_id',
                    'continent_id',
                    'ros_id',
                    'motion_vector_id',
                    'user_id',
                    'cof_id',
                    'rental_time_id',
                    'color_id',
                    'governorate_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['car_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Cars::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleCarResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Cars::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleCarResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            } else {
                $ad = Cars::where('car_id', $adid)->first([
                    'en_title',
                    'en_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'price',
                    'picture',
                    'is_special',
                    'watch_count',
                    'manufacturing_year',
                    'kilometrag',
                    'car_type_id',
                    'car_status_id',
                    'continent_id',
                    'ros_id',
                    'motion_vector_id',
                    'user_id',
                    'cof_id',
                    'rental_time_id',
                    'color_id',
                    'governorate_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['car_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Cars::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleCarResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Cars::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleCarResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            }
        } else if ($category == 2) { //this ad belong to real estate category
            if ($lang == 'ar') {
                $ad = RealEstate::where('real_estate_id', $adid)->first([
                    'ar_title',
                    'ar_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'price',
                    'picture',
                    'is_special',
                    'watch_count',
                    'apartment_size',
                    'land_size',
                    'building_size',
                    'floor',
                    'room_count',
                    'elevator',
                    'user_id',
                    'ros_id',
                    'REMC_id',
                    'apartment_status_id',
                    'building_statuse_id',
                    'CAAT_id',
                    'land_type_id',
                    'governorate_id',
                    'area_id',
                    'neighborhood_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['real_estate_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = RealEstate::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleRealEstateResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = RealEstate::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleRealEstateResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            } else {
                $ad = RealEstate::where('real_estate_id', $adid)->first([
                    'en_title',
                    'en_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'price',
                    'picture',
                    'is_special',
                    'watch_count',
                    'apartment_size',
                    'land_size',
                    'building_size',
                    'floor',
                    'room_count',
                    'elevator',
                    'user_id',
                    'ros_id',
                    'REMC_id',
                    'apartment_status_id',
                    'building_statuse_id',
                    'CAAT_id',
                    'land_type_id',
                    'governorate_id',
                    'area_id',
                    'neighborhood_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['real_estate_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = RealEstate::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleRealEstateResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = RealEstate::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleRealEstateResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            }
        } else if ($category == 3) { //this ad belong to jobs category
            if ($lang == 'ar') {
                $ad = Jobs::where('job_id', $adid)->first([
                    'ar_title',
                    'ar_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'qualification',
                    'age',
                    'salary',
                    'work_hour',
                    'extra_work_hour',
                    'work_hour_rent',
                    'driving_license',
                    'picture',
                    'is_special',
                    'watch_count',
                    'user_id',
                    'governorate_id',
                    'area_id',
                    'jobs_categorie_id',
                    'lang_id',
                    'YOE_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['job_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Jobs::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleJobResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Jobs::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleJobResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            } else {
                $ad = Jobs::where('job_id', $adid)->first([
                    'en_title',
                    'en_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'qualification',
                    'age',
                    'salary',
                    'work_hour',
                    'extra_work_hour',
                    'work_hour_rent',
                    'driving_license',
                    'picture',
                    'is_special',
                    'watch_count',
                    'user_id',
                    'governorate_id',
                    'area_id',
                    'jobs_categorie_id',
                    'lang_id',
                    'YOE_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['job_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Jobs::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleJobResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Jobs::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleJobResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            }
        } else if ($category == 4) { //this ad belong to mobiles category
            if ($lang == 'ar') {
                $ad = Mobiles::where('mobile_id', $adid)->first([
                    'ar_title',
                    'ar_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'duration_of_use',
                    'ram',
                    'price',
                    'memory',
                    'customs_paid',
                    'picture',
                    'is_special',
                    'watch_count',
                    'user_id',
                    'governorate_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['mobile_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Mobiles::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleMobileResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Mobiles::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleMobileResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            } else {
                $ad = Mobiles::where('mobile_id', $adid)->first([
                    'en_title',
                    'en_desc',
                    'phone_number',
                    'manger_accept',
                    'isPhone_visable',
                    'duration_of_use',
                    'ram',
                    'price',
                    'memory',
                    'customs_paid',
                    'picture',
                    'is_special',
                    'watch_count',
                    'user_id',
                    'governorate_id',
                    'ad_type_id',
                    'ad_statuse_id',
                    'created_at',
                ]);
                if ($ad) {
                    if ($request['user_id']) {
                        $is_favorite = 0;
                        $checkFav = Favorite::where([['mobile_id', $adid], ['user_id', $request['user_id']]])->first();
                        if ($checkFav) {
                            $is_favorite = 1;
                        } else {
                            $is_favorite = 0;
                        }
                        $increment = Mobiles::find($adid);
                        $increment->watch_count++;
                        $increment->save();
                        return $this->success('ad', [SingleMobileResource::collection([$ad]), ['is_favorite' => $is_favorite]]);
                    }
                    $increment = Mobiles::find($adid);
                    $increment->watch_count++;
                    $increment->save();
                    return $this->success('ad', [SingleMobileResource::collection([$ad]), ['is_favorite' => null]]);
                } else {
                    return $this->fails();
                }
            }
        } else {
            return $this->fails();
        }
    }
    public function search($lang)
    {
        //need to be editd
        return $cars = Cars::orderBy('created_at', 'desc')->where('ar_title', 'like', '%' . request('search') . '%')->orWhere('en_title', 'like', '%' . request('search') . '%')->paginate(1, ['car_id', 'ar_title', 'en_title']);
        if ($lang == 'ar') {
            $real_estates = RealEstate::orderBy('created_at', 'desc')->filter()->paginate(10, ['real_estate_id', 'ar_title']);
            $jobs = Jobs::orderBy('created_at', 'desc')->filter()->paginate(10, ['job_id', 'ar_title']);
        } else if ($lang == 'en') {
            $cars = Cars::orderBy('created_at', 'desc')->filter()->paginate(10, ['car_id', 'en_title']);
            $real_estates = RealEstate::orderBy('created_at', 'desc')->filter()->paginate(10, ['real_estate_id', 'en_title']);
            $jobs = Jobs::orderBy('created_at', 'desc')->filter()->paginate(10, ['job_id', 'en_title']);
        }
        $filterResualt = [
            $cars, $real_estates, $jobs
        ];
        if ($filterResualt) {
            return $this->success('ads', $filterResualt);
        }
    }

    public function Rate(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
            'ad_id' => ['required', 'integer'],
            'rate_from_5' => ['required', 'integer', 'between:0,5'],
            'category' => ['required', 'integer'],
            'reason' => ['required', 'string', 'max:120'],
        ]);
        $rate = Rate::Create([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'ad_id' => $request->ad_id,
            'rate_from_5' => $request->rate_from_5,
            'reason' => $request->reason,
        ]);
        if ($rate) {
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Rate Addedd Successfully',
            ], 200);
        } else {
            return $this->fails();
        }
    }
    public function MyAd($lang, $per_page)
    {
        $request = [
            'lang' => $lang,
            'per_page' => $per_page
        ];
        $validator = Validator::make($request, [
            'lang' => ['required', 'string', 'in:ar,en'],
            'per_page' => ['required', 'integer', 'between:1,50'],
        ]);
        if ($validator->fails())
            return $validator->validated();
        if ($lang == 'ar') {
            $cars = Cars::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['car_id', 'ar_title', 'ar_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'carpage');
            $real_estates = RealEstate::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['real_estate_id', 'ar_title', 'ar_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'realestatepage');
            $jobs = Jobs::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['job_id', 'ar_title', 'ar_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'salary', 'governorate_id', 'created_at'], 'jobpage');
            $mobiles = Mobiles::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['mobile_id', 'ar_title', 'ar_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'mobilepage');
        } else {
            $cars = Cars::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['car_id', 'en_title', 'en_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'carpage');
            $real_estates = RealEstate::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['real_estate_id', 'en_title', 'en_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'realestatepage');
            $jobs = Jobs::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['job_id', 'en_title', 'en_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'salary', 'governorate_id', 'created_at'], 'jobpage');
            $mobiles = Mobiles::where('user_id', auth()->user()['user_id'])->paginate($per_page, ['mobile_id', 'en_title', 'en_desc', 'phone_number', 'manger_accept', 'picture', 'is_special', 'price', 'governorate_id', 'created_at'], 'mobilepage');
        }
        $data = [
            'cars' => CarResource::collection($cars)->response()->getData(),
            'real_estates' => RealEstateResource::collection($real_estates)->response()->getData(),
            'jobs' => JobsResource::collection($jobs)->response()->getData(),
            'mobiles' => MobileResource::collection($mobiles)->response()->getData(),
        ];
        if ($data) {
            return $this->success('Ads', $data);
        } else {
            return $this->fails();
        }
    }


    public function MyNotification(Request $request)
    {
        //TODO get the user id from token
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        $noti = Notifcation::where('user_id', $request->user_id)->paginate(25);
        if ($noti) {
            return $this->success('Notification', $noti);
        } else {
            return $this->fails();
        }
    }

    public function spcialAd($id, Request $request)
    {
        if ($request->query('lang') == 'ar') {
            $data = SpcialAd::where('spcial_ad_id', $id)->get(['spcial_ad_id', 'ar_title', 'ar_desc', 'is_golden', 'duration', 'picture', 'user_id']);
        } else if ($request->query('lang') == 'en') {
            $data = SpcialAd::where('spcial_ad_id', $id)->get(['spcial_ad_id', 'en_title', 'en_desc', 'is_golden', 'duration', 'picture', 'user_id']);
        }
        if ($data) {
            return $this->success('spcailAd', SpcialAdResource::collection($data));
        } else {
            return $this->fails();
        }
    }

    public function MyFavorite($lang, $per_page)
    {
        $request = [
            'lang' => $lang,
            'per_page' => $per_page
        ];
        $validator = Validator::make($request, [
            'lang' => ['required', 'string', 'in:ar,en'],
            'per_page' => ['required', 'integer', 'between:1,50'],
        ]);
        if ($validator->fails())
            return $validator->validated();
        if ($lang == 'ar') {
            $data = Favorite::where('user_id', auth()->user()['user_id'])->with(
                ['car' => function ($query) {
                    $query->select(['car_id', 'ar_title', 'ar_desc', 'phone_number', 'en_title', 'en_desc', 'picture', 'is_special', 'price', 'governorate_id', 'created_at']);
                }],
                ['real_estate' => function ($query) {
                    $query->select(['real_estate_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'governorate_id', 'created_at']);
                }],
                ['job' => function ($query) {
                    $query->select(['job_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'salary', 'governorate_id', 'created_at']);
                }],
                ['mobile' => function ($query) {
                    $query->select(['mobile_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'governorate_id', 'created_at']);
                }]
            )->paginate($per_page);
            if ($data) {
                return $this->success('Favorite', FavoriteResource::collection($data)->response()->getData());
            } else {
                return $this->fails();
            }
        } else {
            $data = Favorite::where('user_id', auth()->user()['user_id'])->with(
                ['car' => function ($query) {
                    $query->select(['car_id', 'en_title', 'en_desc', 'ar_title', 'ar_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                }],
                ['real_estate' => function ($query) {
                    $query->select(['real_estate_id', 'en_title', 'en_desc', 'ar_title', 'ar_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                }],
                ['job' => function ($query) {
                    $query->select(['job_id', 'en_title', 'en_desc', 'ar_title', 'ar_desc', 'picture', 'is_special', 'salary', 'manger_accept', 'governorate_id', 'created_at']);
                }],
                ['mobile' => function ($query) {
                    $query->select(['mobile_id', 'en_title', 'en_desc', 'ar_title', 'ar_desc', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                }]
            )->get();
            if ($data) {
                return $this->success('Favorite', FavoriteResource::collection($data));
            } else {
                return $this->fails();
            }
        }
    }

    public function AddToFavorite(Request $request)
    {
        $request->validate([
            'ad_id' => ['required', 'integer'],
            'category' => ['required', 'integer'],
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        if ($request->category == 1) { //car ad
            $check = Favorite::where([['car_id', $request->ad_id], ['user_id', $request->user_id]])->first();
            if ($check) {
                $check->delete();
                return $this->success('Favorite', 'Deleted Successfully');
            }
            $data = Favorite::Create([
                'car_id' => $request->ad_id ?? 0,
                'real_estate_id' => 0,
                'job_id' => 0,
                'mobile_id' => 0,
                'user_id' => $request->user_id,
            ]);
            if ($data) {
                return $this->success('Favorite', $data);
            } else {
                return $this->fails();
            }
        } else if ($request->category == 2) { //real estate ad
            $check = Favorite::where([['real_estate_id', $request->ad_id], ['user_id', $request->user_id]])->first();
            if ($check) {
                $check->delete();
                return $this->success('Favorite', 'Deleted Successfully');
            }
            $data = Favorite::Create([
                'car_id' => 0,
                'real_estate_id' => $request->ad_id ?? 0,
                'job_id' => 0,
                'mobile_id' => 0,
                'user_id' => $request->user_id,
            ]);
            if ($data) {
                return $this->success('Favorite', $data);
            } else {
                return $this->fails();
            }
        } else if ($request->category == 3) { //job ad
            $check = Favorite::where([['job_id', $request->ad_id], ['user_id', $request->user_id]])->first();
            if ($check) {
                $check->delete();
                return $this->success('Favorite', 'Deleted Successfully');
            }
            $data = Favorite::Create([
                'car_id' => 0,
                'real_estate_id' => 0,
                'job_id' => $request->ad_id ?? 0,
                'mobile_id' => 0,
                'user_id' => $request->user_id,
            ]);
            if ($data) {
                return $this->success('Favorite', $data);
            } else {
                return $this->fails();
            }
        } else if ($request->category == 4) { //mobile ad
            $check = Favorite::where([['mobile_id', $request->ad_id], ['user_id', $request->user_id]])->first();
            if ($check) {
                $check->delete();
                return $this->success('Favorite', 'Deleted Successfully');
            }
            $data = Favorite::Create([
                'car_id' => 0,
                'real_estate_id' => 0,
                'job_id' => 0,
                'mobile_id' => $request->ad_id ?? 0,
                'user_id' => $request->user_id,
            ]);
            if ($data) {
                return $this->success('Favorite', $data);
            } else {
                return $this->fails();
            }
        } else {
            return $this->fails();
        }
    }

    public function terms(Request $request)
    {
        if ($request->query('lang') == 'ar') {
            $data = Terms::first()->get(['term_id', 'ar_terms_conditions']);
        } else if ($request->query('lang') == 'en') {
            $data = Terms::first()->get(['term_id', 'en_terms_conditions']);
        }
        if ($data) {
            return $this->success('TERMS', TermsResource::collection($data));
        } else {
            return $this->fails();
        }
    }
}
