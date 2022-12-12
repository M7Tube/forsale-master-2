<?php

namespace App\Http\Controllers\API\AddNewAd;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\CarTypeResource;
use App\Http\Resources\API\GovernorateResource;
use App\Http\Resources\API\RentOrSaleResource;
use Illuminate\Http\Request;
use App\Http\Traits\MessageTrait;
use App\Http\Resources\API\AdResource;
use App\Http\Resources\API\AdStatusResource;
use App\Http\Resources\API\ApartmentStatusResource;
use App\Http\Resources\API\AreaResource;
use App\Http\Resources\API\BuildingStatusResource;
use App\Http\Resources\API\CarResource;
use App\Http\Resources\API\CarStatusResource;
use App\Http\Resources\API\ColorResource;
use App\Http\Resources\API\CommercialAndArtificialTypeResource;
use App\Http\Resources\API\CountryOfManufactureResource;
use App\Http\Resources\API\JobsCategoryResource;
use App\Http\Resources\API\JobsResource;
use App\Http\Resources\API\LandTypeResource;
use App\Http\Resources\API\NeighborhoodResource;
use App\Http\Resources\API\PersonLanguegesResource;
use App\Http\Resources\API\RealEstateMainCategoryResource;
use App\Http\Resources\API\RealEstateResource;
use App\Http\Resources\API\RentalTimeResource;
use App\Http\Resources\API\YearsOfExperienceResource;
use App\Models\Ad;
use App\Models\AdStatus;
use App\Models\AdType;
use App\Models\ApartmentStatus;
use App\Models\AppSettings;
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
use Database\Seeders\RealEstateMainCategorySeeder;
use Image;

class AddNewAdController extends Controller
{
    use MessageTrait;
    public function getAddNewAdInfo($lang, $category)
    {
        if ($lang == 'ar') { //arabic language
            if ($category == 1) { //cars
                $info = [
                    'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'CarType' => CarTypeResource::collection(CarType::all(['car_type_id', 'ar_name'])),
                    'CarStatus' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'ar_name'])),
                    'CountryOfManufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'ar_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'ar_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                    'RentalTime' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'ar_rent_name'])),
                ];
                return $this->success('info', $info);
            } else if ($category == 2) { //real estate
                if (request()->query('real_estate_main_category')) {
                    //info for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the seconde category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the third category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'ApartmentStatus' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'ar_name'])),
                            'BuildingStatus' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the fourth category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the fifth category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    } else {
                        $info = null;
                    }
                } else {
                    $info = [
                        'RealEstateMainCategory' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'ar_name'])),
                    ];
                }
                return $this->success('info', $info);
            } else if ($category == 3) { //jobs
                $info = [
                    'JobsCategory' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                    'PersonLangueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'ar_name'])),
                    'YearsOfExperience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'ar_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                ];
                return $this->success('info', $info);
            } else {
                return $this->fails();
            }
        } else { //english language
            if ($category == 1) { //cars
                $info = [
                    'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'CarType' => CarTypeResource::collection(CarType::all(['car_type_id', 'en_name'])),
                    'CarStatus' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'en_name'])),
                    'CountryOfManufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'en_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'en_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                    'RentalTime' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'en_rent_name'])),
                ];
                return $this->success('info', $info);
            } else if ($category == 2) { //real estate
                if (request()->query('real_estate_main_category')) {
                    //info for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the seconde category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the third category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'ApartmentStatus' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'en_name'])),
                            'BuildingStatus' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the fourth category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the fifth category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    } else {
                        $info = null;
                    }
                } else {
                    $info = [
                        'RealEstateMainCategory' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'en_name'])),
                    ];
                }
                return $this->success('info', $info);
            } else if ($category == 3) { //jobs
                $info = [
                    'JobsCategory' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                    'PersonLangueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'en_name'])),
                    'YearsOfExperience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'en_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                ];
                return $this->success('info', $info);
            } else {
                return $this->fails();
            }
        }
    }
    //
    public function AddNewAd(Request $request, $category)
    {
        if ($request->category == 1) { //cars
            $request->validate([
                'ar_title' => ['required_without:en_title', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
                'car_type_id' => ['integer', 'exists:car_types,car_type_id'],
                'car_status_id' => ['integer', 'exists:car_statuses,car_status_id'],
                'ros_id' => ['integer', 'exists:rent_or_sales,ros_id'],
                'motion_vector_id' => ['integer', 'exists:motion_vectors,motion_vector_id'],
                'cof_id' => ['integer', 'exists:country_of_manufactures,cof_id'],
                'continent_id' => ['integer', 'exists:continent_of_origins,continent_id'],
                'rental_time_id' => ['integer', 'exists:rental_times,rental_time_id'],
                'color_id' =>  ['integer', 'exists:colors,color_id'],
                'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
                'ad_type_id' => ['integer', 'exists:ad_types,ad_type_id'],
                'ad_statuse_id' => ['integer', 'exists:ad_statuses,ad_statuse_id'],
            ]);
            $listOfPicture = [];
            if ($request->file('picture')) {
                foreach ($request->file('picture') as $pic) {
                    $name = $pic->getClientOriginalName() . time() . '.jpg';
                    $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                    array_push($listOfPicture, $name);
                }
            }
            $is_spcial = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                return response()->json([
                    __('message') => __('Your Ads Is Over')
                ], 404);
            }
            $car = Cars::Create([
                'ar_title' => $request->ar_title ?? null,
                'en_title' => $request->en_title ?? null,
                'ar_desc' => $request->ar_desc ?? null,
                'en_desc' => $request->en_desc ?? null,
                'phone_number' => $request->phone_number ?? null,
                'manger_accept' =>  AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $request->isPhone_visable ?? 0,
                'price' => $request->price ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'manufacturing_year' =>  $request->manufacturing_year ?? null,
                'kilometrag' =>  $request->kilometrag ?? null,
                'car_type_id' => $request->car_type_id ?? 0,
                'car_status_id' => $request->car_status_id ?? 0,
                'ros_id' => $request->ros_id ?? 0,
                'motion_vector_id' => $request->motion_vector_id ?? 0,
                'user_id' => $request->user_id ?? 0,
                'cof_id' => $request->cof_id ?? 0,
                'continent_id' => $request->continent_id ?? 0,
                'rental_time_id' => $request->rental_time_id ?? 0,
                'color_id' => $request->color_id ?? 0,
                'governorate_id' => $request->governorate_id ?? 0,
                'ad_type_id' => $request->ad_type_id ?? 0,
                'ad_statuse_id' => $request->ad_statuse_id ?? 0,
            ]);
            if ($car) {
                AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->decrement('count');
                return $this->success('ad', $car);
            } else {
                return $this->fails();
            }
        } elseif ($request->category == 2) { //real estate
            $request->validate([
                'ar_title' => ['required_without:en_title', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
                'REMC_id' => ['required', 'integer', 'exists:real_estate_main_categories,REMC_id'],
            ]);
            $listOfPicture = [];
            if ($request->file('picture')) {
                foreach ($request->file('picture') as $pic) {
                    $name = $pic->getClientOriginalName() . time() . '.jpg';
                    $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                    array_push($listOfPicture, $name);
                }
            }
            $is_spcial = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                return response()->json([
                    __('message') => __('Your Ads Is Over')
                ], 404);
            }
            $real_estate = RealEstate::Create([
                'en_title' => $request->en_title ?? null,
                'ar_title' => $request->ar_title ?? null,
                'ar_desc' => $request->ar_desc ?? null,
                'en_desc' => $request->en_desc ?? null,
                'phone_number' => $request->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $request->isPhone_visable ?? 0,
                'price' => $request->price ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'apartment_size' => $request->apartment_size ?? 0,
                'land_size' => $request->land_size ?? 0,
                'building_size' => $request->building_size ?? 0,
                'floor' => $request->floor ?? 0,
                'room_count' => $request->room_count ?? 0,
                'elevator' => $request->elevator ?? 0,
                'user_id' => $request->user_id ?? 0,
                'ros_id' => $request->ros_id ?? 0,
                'REMC_id' => $request->REMC_id ?? 0,
                'apartment_status_id' => $request->apartment_status_id ?? 0,
                'building_statuse_id' => $request->building_statuse_id ?? 0,
                'CAAT_id' => $request->CAAT_id ?? 0,
                'land_type_id' => $request->land_type_id ?? 0,
                'governorate_id' => $request->governorate_id ?? 0,
                'area_id' => $request->area_id ?? 0,
                'neighborhood_id' => $request->neighborhood_id ?? 0,
                'ad_type_id' => $request->ad_type_id ?? 0,
                'ad_statuse_id' => $request->ad_statuse_id ?? 0,
            ]);
            if ($real_estate) {
                AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->decrement('count');
                return $this->success('ad', $real_estate);
            } else {
                return $this->fails();
            }
        } elseif ($request->category == 3) { //jobs
            $request->validate([
                'ar_title' => ['required_without:en_title', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
            ]);
            $listOfPicture = [];
            if ($request->file('picture')) {
                foreach ($request->file('picture') as $pic) {
                    $name = $pic->getClientOriginalName() . time() . '.jpg';
                    $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                    array_push($listOfPicture, $name);
                }
            }
            $is_spcial = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                return response()->json([
                    __('message') => __('Your Ads Is Over')
                ], 404);
            }
            $jobs = Jobs::Create([
                'ar_title' => $request->ar_title ?? null,
                'en_title' => $request->en_title ?? null,
                'ar_desc' => $request->ar_desc ?? null,
                'en_desc' => $request->en_desc ?? null,
                'phone_number' => $request->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $request->isPhone_visable ?? 0,
                'qualification' => $request->qualification ?? null,
                'age' => $request->age ?? null,
                'salary' => $request->salary ?? null,
                'work_hour' => $request->work_hour ?? null,
                'extra_work_hour' => $request->extra_work_hour ?? null,
                'work_hour_rent' => $request->work_hour_rent ?? null,
                'driving_license' => $request->driving_license ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'user_id' => $request->user_id ?? 0,
                'governorate_id' => $request->governorate_id ?? 0,
                'area_id' => $request->area_id ?? 0,
                'jobs_categorie_id' => $request->jobs_categorie_id ?? 0,
                'lang_id' => $request->lang_id ?? 0,
                'YOE_id' => $request->YOE_id ?? 0,
                'ad_type_id' => $request->ad_type_id ?? 0,
                'ad_statuse_id' => $request->ad_statuse_id ?? 0,
            ]);
            if ($jobs) {
                AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->decrement('count');
                return $this->success('ad', $jobs);
            } else {
                return $this->fails();
            }
        } elseif ($request->category == 4) { //mobiles
            $request->validate([
                'ar_title' => ['required_without:en_title', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
            ]);
            $listOfPicture = [];
            if ($request->file('picture')) {
                foreach ($request->file('picture') as $pic) {
                    $name = $pic->getClientOriginalName() . time() . '.jpg';
                    $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                    array_push($listOfPicture, $name);
                }
            }
            $is_spcial = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                return response()->json([
                    __('message') => __('Your Ads Is Over')
                ], 404);
            }
            $mobiles = Mobiles::Create([
                'ar_title' => $request->ar_title ?? null,
                'en_title' => $request->en_title ?? null,
                'ar_desc' => $request->ar_desc ?? null,
                'en_desc' => $request->en_desc ?? null,
                'phone_number' => $request->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $request->isPhone_visable ?? 0,
                'duration_of_use' => $request->duration_of_use ?? null,
                'ram' => $request->ram ?? null,
                'price' => $request->price ?? null,
                'memory' => $request->memory ?? null,
                'customs_paid' => $request->customs_paid ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'user_id' => $request->user_id ?? 0,
                'governorate_id' => $request->governorate_id ?? 0,
                'ad_type_id' => $request->ad_type_id ?? 0,
                'ad_statuse_id' => $request->ad_statuse_id ?? 0,
            ]);
            if ($mobiles) {
                AdType::where('user_id', $request->user_id)->where('ad_type_id', $request->ad_type_id)->decrement('count');
                return $this->success('ad', $mobiles);
            } else {
                return $this->fails();
            }
        } else {
            return $this->fails();
        }
    }
}
//as
