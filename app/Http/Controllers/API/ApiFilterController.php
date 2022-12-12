<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\AdResource;
use App\Http\Resources\API\AdStatusResource;
use App\Http\Resources\API\ApartmentStatusResource;
use App\Http\Resources\API\AreaResource;
use App\Http\Resources\API\BuildingStatusResource;
use App\Http\Resources\API\CarResource;
use App\Http\Resources\API\CarStatusResource;
use App\Http\Resources\API\CarTypeResource;
use App\Http\Resources\API\ColorResource;
use App\Http\Resources\API\CommercialAndArtificialTypeResource;
use App\Http\Resources\API\CountryOfManufactureResource;
use App\Http\Resources\API\GovernorateResource;
use App\Http\Resources\API\JobsCategoryResource;
use App\Http\Resources\API\JobsResource;
use App\Http\Resources\API\LandTypeResource;
use App\Http\Resources\API\MobileResource;
use App\Http\Resources\API\NeighborhoodResource;
use App\Http\Resources\API\PersonLanguegesResource;
use App\Http\Resources\API\RealEstateMainCategoryResource;
use App\Http\Resources\API\RealEstateResource;
use App\Http\Resources\API\RentalTimeResource;
use App\Http\Resources\API\RentOrSaleResource;
use App\Http\Resources\API\YearsOfExperienceResource;
use App\Models\Ad;
use App\Models\AdStatus;
use App\Models\ApartmentStatus;
use App\Models\Area;
use App\Models\BuildingStatus;
use App\Models\Cars;
use App\Models\CarStatus;
use App\Models\CarType;
use App\Models\Color;
use App\Models\CommercialAndArtificialType;
use App\Models\CountryOfManufacture;
use App\Models\Filter;
use App\Models\Governorate;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\LandType;
use App\Models\Mobiles;
use App\Models\Neighborhood;
use App\Models\PersonLangueges;
use App\Models\RealEstate;
use App\Models\RealEstateMainCategory;
use App\Models\RentalTime;
use App\Models\RentOrSale;
use App\Models\YearsOfExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiFilterController extends Controller
{
    //
    public function view($lang, $per_page, $category)
    {
        //validate the per page and category number
        $valdiaterequest = [
            'per_page' => $per_page,
            'category' => $category
        ];
        $validator = Validator::make($valdiaterequest, [
            'per_page' => ['required', 'integer', 'between:1,50'],
            'category' => ['required', 'integer', 'in:1,2,3,4'],
        ]);
        //if the validate fails return json message
        if ($validator->fails())
            return response()->json([
                'status' => 'fails',
                'code' => 400,
                'message' => 'There Is Something Wrong',
            ], 400);
        //if the validation pass .... check what the category that the user choose...!
        if ($category == 1) { //cars category
            //check lang
            if ($lang == 'ar') {
                //filter resualt
                $filterResualt = Cars::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->paginate($per_page, ['car_id', 'ar_title', 'ar_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Cars::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Rent Or Sale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'Car Type' => CarTypeResource::collection(CarType::all(['car_type_id', 'ar_name'])),
                    'Car Status' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'ar_name'])),
                    'Country Of Manufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'ar_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'ar_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                    'Rental Time' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'ar_rent_name'])),
                ];
            } else if ($lang == 'en') {
                //filter resualt
                $filterResualt = Cars::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->paginate($per_page, ['car_id', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Cars::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Rent Or Sale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'Car Type' => CarTypeResource::collection(CarType::all(['car_type_id', 'en_name'])),
                    'Car Status' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'en_name'])),
                    'Country Of Manufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'en_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'en_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                    'Rental Time' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'en_rent_name'])),
                ];
            }
            //return date
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Successfull Request',
                'data' => [
                    'count' => $count,
                    'ads' => CarResource::collection($filterResualt)->response()->getData(),
                    'filters' => $filters,
                ],
            ], 200);
        } else if ($category == 2) { //real state category
            //check lang
            if ($lang == 'ar') {
                //filter resualt
                $filterResualt = RealEstate::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['real_estate_main_category', 'without_picture'])->filter()->paginate($per_page, ['real_estate_id', 'ar_title', 'ar_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = RealEstate::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['real_estate_main_category', 'without_picture'])->filter()->count();
                //get the filters
                if (request()->query('real_estate_main_category')) {
                    //filters for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'Apartment Status' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'ar_name'])),
                            'Building Status' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'ar_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'Commercial And Artificial Type' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'Commercial And Artificial Type' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                } else {
                    $filters = [
                        'Real Estate Main Category' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'ar_name'])),
                    ];
                }
            } else if ($lang == 'en') {
                //filter resualt
                $filterResualt = RealEstate::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['real_estate_main_category', 'without_picture'])->filter()->paginate($per_page, ['real_estate_id', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = RealEstate::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['real_estate_main_category', 'without_picture'])->filter()->count();
                //get the filters
                if (request()->query('real_estate_main_category')) {
                    //filters for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'Apartment Status' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'en_name'])),
                            'Building Status' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'en_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'Commercial And Artificial Type' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //filters for the first category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $filters = [
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'Land Type' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'Commercial And Artificial Type' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                } else {
                    $filters = [
                        'Real Estate Main Category' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'en_name'])),
                    ];
                }
            }
            //return date
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Successfull Request',
                'data' => [
                    'count' => $count,
                    'ads' => RealEstateResource::collection($filterResualt)->response()->getData(),
                    'filters' => $filters,
                ],
            ], 200);
        } else if ($category == 3) { //jobs category
            //check lang
            if ($lang == 'ar') {
                //filter resualt
                $filterResualt = Jobs::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['jobs_category', 'without_picture'])->filter()->paginate($per_page, ['job_id', 'ar_title', 'ar_desc', 'picture', 'is_special', 'salary', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Jobs::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['jobs_category', 'without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Job Category' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                    'Person Langueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'ar_name'])),
                    'Years Of Experience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'ar_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                ];
            } else if ($lang == 'en') {
                //filter resualt
                $filterResualt = Jobs::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['jobs_category', 'without_picture'])->filter()->paginate($per_page, ['job_id', 'en_title', 'en_desc', 'picture', 'is_special', 'salary', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Jobs::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['jobs_category', 'without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Job Category' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                    'Person Langueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'en_name'])),
                    'Years Of Experience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'en_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                ];
            }
            //return date
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Successfull Request',
                'data' => [
                    'count' => $count,
                    'ads' => JobsResource::collection($filterResualt)->response()->getData(),
                    'filters' => $filters,
                ],
            ], 200);
        }else if ($category == 4) { //Mobile category
            //check lang
            if ($lang == 'ar') {
                //filter resualt
                $filterResualt = Mobiles::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->paginate($per_page, ['mobile_id', 'ar_title', 'ar_desc', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Mobiles::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                ];
            } else if ($lang == 'en') {
                //filter resualt
                $filterResualt = Mobiles::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->paginate($per_page, ['mobile_id', 'en_title', 'en_desc', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at']);
                //count ads
                $count = Mobiles::where('manger_accept', 2)->when(request()->query('without_picture'), function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->ignoreRequest(['without_picture'])->filter()->count();
                //get the filters
                $filters = [
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'Ad Status' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                ];
            }
            //return date
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Successfull Request',
                'data' => [
                    'count' => $count,
                    'ads' => MobileResource::collection($filterResualt)->response()->getData(),
                    'filters' => $filters,
                ],
            ], 200);
        }
    }
}
