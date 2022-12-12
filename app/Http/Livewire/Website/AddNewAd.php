<?php

namespace App\Http\Livewire\Website;

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
use App\Models\ContinentOfOrigin;
use App\Models\CountryOfManufacture;
use App\Models\Governorate;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\LandType;
use App\Models\Mobiles;
use App\Models\MotionVector;
use App\Models\Neighborhood;
use App\Models\PersonLangueges;
use App\Models\RealEstate;
use App\Models\RealEstateMainCategory;
use App\Models\RentalTime;
use App\Models\RentOrSale;
use App\Models\User;
use App\Models\YearsOfExperience;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class AddNewAd extends Component
{
    use WithFileUploads;
    public $ad_type_id;
    public $user_id;
    public $category;
    public $ros_id;
    public $en_title;
    public $ar_title;
    public $en_desc;
    public $ar_desc;
    public $picture = [];
    public $price;
    public $phone_number;
    public $isPhone_visable;
    public $salary;
    public $manufacturing_year;
    public $kilometrag;
    public $car_type_id;
    public $car_status_id;
    public $motion_vector_id;
    public $cof_id;
    public $continent_id;
    public $rental_time_id;
    public $color_id;
    public $governorate_id;
    public $ad_statuse_id;

    //real estate
    public $apartment_size;
    public $land_size;
    public $building_size;
    public $floor;
    public $room_count;
    public $elevator;
    public $REMC_id;
    public $CAAT_id;
    public $land_type_id;
    public $area_id;
    public $neighborhood_id;
    public $building_statuse_id;
    public $apartment_status_id;
    public $real_estate_main_categorys;
    public $apartment_status;
    public $building_status;
    public $CAATs;
    public $land_types;
    public $areas;
    public $neighborhoods;

    // jobs
    public $qualification;
    public $age;
    public $work_hour;
    public $extra_work_hour;
    public $work_hour_rent;
    public $driving_license;
    public $jobs_categorie_id;
    public $lang_id;
    public $YOE_id;

    public $jobs_categories;
    public $langs;
    public $YOEs;


    public $ad_types;
    public $rent_or_sales;
    public $car_types;
    public $car_status;
    public $motion_vectors;
    public $country_of_manufactures;
    public $continent_of_origins;
    public $rental_times;
    public $colors;
    public $governorates;
    public $ad_statuses;

    //mobiles
    public $ram;
    public $customs_paid;
    public $memory;
    public $duration_of_use;

    public function boot()
    {
        //for all category
        $this->user_id = session()->get('WebLoggedIn', [])['user_id'];
        $this->ad_types = AdType::where('user_id', $this->user_id)->get();
        $this->governorates = Governorate::all();
        $this->ad_statuses = AdStatus::all();
        $this->ad_statuse_id = $this->ad_statuses[0]['ad_statuse_id'];
        $this->ad_type_id = $this->ad_types[0]['ad_type_id'];
        $this->category = 1;
        $this->governorate_id = 1;
        $this->isPhone_visable = 1;

        //for cars
        $this->car_types = CarType::all();
        $this->car_status = CarStatus::all();
        $this->continent_of_origins = ContinentOfOrigin::all();
        $this->rental_times = RentalTime::all();
        $this->colors = Color::all();
        $this->country_of_manufactures = CountryOfManufacture::all();
        $this->motion_vectors = MotionVector::all();

        //for real estate
        $this->real_estate_main_categorys = RealEstateMainCategory::all();
        $this->apartment_status = ApartmentStatus::all();
        $this->neighborhoods = Neighborhood::all();
        $this->land_types = LandType::all();
        $this->building_status = BuildingStatus::all();
        $this->REMC_id = 1;
        $this->elevator = 0;

        //for jobs
        $this->langs = PersonLangueges::all();
        $this->YOEs = YearsOfExperience::all();
        $this->jobs_categories = JobsCategory::all();
        $this->driving_license = 0;

        //except jobs
        $this->rent_or_sales = RentOrSale::all();
        $this->ros_id = $this->rent_or_sales[0]['ros_id'];

        //except cars
        $this->areas = Area::all();
    }

    public function updatedREMCId()
    {
        $this->CAATs = CommercialAndArtificialType::where('REMC_id', $this->REMC_id)->get();
    }

    public function add()
    {
        $user = User::where('user_id', $this->user_id)->first();
        if ($this->category == 1) { //cars
            $this->validate([
                'ar_title' => ['required_without:en_title', 'nullable', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'nullable', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'nullable', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'nullable', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
                // 'car_type_id' => ['integer', 'exists:car_types,car_type_id'],
                // 'car_status_id' => ['integer', 'exists:car_statuses,car_status_id'],
                // 'ros_id' => ['integer', 'exists:rent_or_sales,ros_id'],
                // 'motion_vector_id' => ['integer', 'exists:motion_vectors,motion_vector_id'],
                // 'cof_id' => ['integer', 'exists:country_of_manufactures,cof_id'],
                // 'continent_id' => ['integer', 'exists:continent_of_origins,continent_id'],
                // 'rental_time_id' => ['integer', 'exists:rental_times,rental_time_id'],
                // 'color_id' =>  ['integer', 'exists:colors,color_id'],
                // 'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
                // 'ad_type_id' => ['integer', 'exists:ad_types,ad_type_id'],
                // 'ad_statuse_id' => ['integer', 'exists:ad_statuses,ad_statuse_id'],
            ]);
            $listOfPicture = [];
            foreach ($this->picture as $pic) {
                $name = $pic->getClientOriginalName() . time() . '.jpg';
                $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                array_push($listOfPicture, $name);
            }
            $is_spcial = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                if ($user->unlimited == 0) {
                    return response()->json([
                        __('message') => __('Your Ads Is Over')
                    ], 404);
                }
            }
            $car = Cars::Create([
                'ar_title' => $this->ar_title ?? null,
                'en_title' => $this->en_title ?? null,
                'ar_desc' => $this->ar_desc ?? null,
                'en_desc' => $this->en_desc ?? null,
                'phone_number' => $this->phone_number ?? null,
                'manger_accept' =>  AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $this->isPhone_visable ?? 0,
                'price' => $this->price ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'manufacturing_year' =>  $this->manufacturing_year ?? null,
                'kilometrag' =>  $this->kilometrag ?? null,
                'car_type_id' => $this->car_type_id ?? 0,
                'car_status_id' => $this->car_status_id ?? 0,
                'ros_id' => $this->ros_id ?? 0,
                'motion_vector_id' => $this->motion_vector_id ?? 0,
                'user_id' => $this->user_id ?? 0,
                'cof_id' => $this->cof_id ?? 0,
                'continent_id' => $this->continent_id ?? 0,
                'rental_time_id' => $this->rental_time_id ?? 0,
                'color_id' => $this->color_id ?? 0,
                'governorate_id' => $this->governorate_id ?? 0,
                'ad_type_id' => $this->ad_type_id ?? 0,
                'ad_statuse_id' => $this->ad_statuse_id ?? 0,
            ]);
            if ($car) {
                AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->decrement('count');
                return redirect()->route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $car->car_id]);
            }
        } elseif ($this->category == 2) { //real estate
            $this->validate([
                'ar_title' => ['required_without:en_title', 'nullable', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'nullable', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'nullable', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'nullable', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
                'REMC_id' => ['required', 'integer', 'exists:real_estate_main_categories,REMC_id'],
            ]);
            $listOfPicture = [];
            foreach ($this->picture as $pic) {
                $name = $pic->getClientOriginalName() . time() . '.jpg';
                $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                array_push($listOfPicture, $name);
            }
            $is_spcial = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                if ($user->unlimited == 0) {
                    return response()->json([
                        __('message') => __('Your Ads Is Over')
                    ], 404);
                }
            }
            $real_estate = RealEstate::Create([
                'en_title' => $this->en_title ?? null,
                'ar_title' => $this->ar_title ?? null,
                'ar_desc' => $this->ar_desc ?? null,
                'en_desc' => $this->en_desc ?? null,
                'phone_number' => $this->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $this->isPhone_visable ?? 0,
                'price' => $this->price ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'apartment_size' => $this->apartment_size ?? null,
                'land_size' => $this->land_size ?? null,
                'building_size' => $this->building_size ?? null,
                'floor' => $this->floor ?? null,
                'room_count' => $this->room_count ?? null,
                'elevator' => $this->elevator ?? null,
                'user_id' => $this->user_id ?? 0,
                'ros_id' => $this->ros_id ?? 0,
                'REMC_id' => $this->REMC_id ?? 0,
                'apartment_status_id' => $this->apartment_status_id ?? 0,
                'building_statuse_id' => $this->building_statuse_id ?? 0,
                'CAAT_id' => $this->CAAT_id ?? 0,
                'land_type_id' => $this->land_type_id ?? 0,
                'governorate_id' => $this->governorate_id ?? 0,
                'area_id' => $this->area_id ?? 0,
                'neighborhood_id' => $this->neighborhood_id ?? 0,
                'ad_type_id' => $this->ad_type_id ?? 0,
                'ad_statuse_id' => $this->ad_statuse_id ?? 0,
            ]);
            if ($real_estate) {
                AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->decrement('count');
                return redirect()->route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $real_estate->real_estate_id]);
            }
        } elseif ($this->category == 3) { //jobs
            $this->validate([
                'ar_title' => ['required_without:en_title', 'nullable', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'nullable', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'nullable', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'nullable', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
            ]);
            $listOfPicture = [];
            foreach ($this->picture as $pic) {
                $name = $pic->getClientOriginalName() . time() . '.jpg';
                $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                array_push($listOfPicture, $name);
            }
            $is_spcial = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                if ($user->unlimited == 0) {
                    return response()->json([
                        __('message') => __('Your Ads Is Over')
                    ], 404);
                }
            }
            $jobs = Jobs::Create([
                'ar_title' => $this->ar_title ?? null,
                'en_title' => $this->en_title ?? null,
                'ar_desc' => $this->ar_desc ?? null,
                'en_desc' => $this->en_desc ?? null,
                'phone_number' => $this->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $this->isPhone_visable ?? 0,
                'qualification' => $this->qualification ?? null,
                'age' => $this->age ?? null,
                'salary' => $this->salary ?? null,
                'work_hour' => $this->work_hour ?? null,
                'extra_work_hour' => $this->extra_work_hour ?? null,
                'work_hour_rent' => $this->work_hour_rent ?? null,
                'driving_license' => $this->driving_license ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'user_id' => $this->user_id ?? 0,
                'governorate_id' => $this->governorate_id ?? 0,
                'area_id' => $this->area_id ?? 0,
                'jobs_categorie_id' => $this->jobs_categorie_id ?? 0,
                'lang_id' => $this->lang_id ?? 0,
                'YOE_id' => $this->YOE_id ?? 0,
                'ad_type_id' => $this->ad_type_id ?? 0,
                'ad_statuse_id' => $this->ad_statuse_id ?? 0,
            ]);
            if ($jobs) {
                AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->decrement('count');
                return redirect()->route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $jobs->job_id]);
            }
        } elseif ($this->category == 4) { //mobiles
            $this->validate([
                'ar_title' => ['required_without:en_title', 'nullable', 'string', 'max:144'],
                'en_title' => ['required_without:ar_title', 'nullable', 'string', 'max:144'],
                'ar_desc' => ['required_without:en_desc', 'nullable', 'string', 'max:1440'],
                'en_desc' => ['required_without:ar_desc', 'nullable', 'string', 'max:1440'],
                'picture.*' => ['required', 'mimes:jpg,png,jpeg'],
            ]);
            $listOfPicture = [];
            foreach ($this->picture as $pic) {
                $name = $pic->getClientOriginalName() . time() . '.jpg';
                $img = Image::make($pic)->resize(1024, 640)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'bottom')->save(storage_path('app/img/' . $name));
                array_push($listOfPicture, $name);
            }
            $is_spcial = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();

            $checkAdType = AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->first();
            if ($checkAdType->count <= 0) {
                if ($user->unlimited == 0) {
                    return response()->json([
                        __('message') => __('Your Ads Is Over')
                    ], 404);
                }
            }
            $mobiles = Mobiles::Create([
                'ar_title' => $this->ar_title ?? null,
                'en_title' => $this->en_title ?? null,
                'ar_desc' => $this->ar_desc ?? null,
                'en_desc' => $this->en_desc ?? null,
                'phone_number' => $this->phone_number ?? null,
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? 1,
                'isPhone_visable' => $this->isPhone_visable ?? 0,
                'ram' => $this->ram ?? null,
                'customs_paid' => $this->customs_paid ?? null,
                'price' => $this->price ?? null,
                'memory' => $this->memory ?? null,
                'duration_of_use' => $this->duration_of_use ?? null,
                'picture' => $listOfPicture != [] ? json_encode($listOfPicture) : json_encode(['defualt.png']),
                'is_special' => $is_spcial->is_spcial ?? 0,
                'watch_count' => 0 ?? 0,
                'user_id' => $this->user_id ?? 0,
                'governorate_id' => $this->governorate_id ?? 0,
                'ad_type_id' => $this->ad_type_id ?? 0,
                'ad_statuse_id' => $this->ad_statuse_id ?? 0,
            ]);
            if ($mobiles) {
                AdType::where('user_id', $this->user_id)->where('ad_type_id', $this->ad_type_id)->decrement('count');
                return redirect()->route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $mobiles->mobile_id]);
            }
        }
    }
    public function render()
    {
        return view('livewire.website.add-new-ad');
    }
}
