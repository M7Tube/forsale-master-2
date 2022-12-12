<?php

namespace App\Http\Livewire\Website;

use App\Models\AdStatus;
use App\Models\ApartmentStatus;
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
use App\Models\YearsOfExperience;
use GuzzleHttp\Psr7\Request;
use Livewire\WithPagination;
use Livewire\Component;

class ViewAds extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category;

    protected $ads;
    public $readyToLoad = false;

    public $governorates;
    public $carTypes;
    public $colors;
    public $continents;
    public $countryOfmans;
    public $rentalTimes;
    public $motion_vectors;
    public $car_status;
    public $ad_statuses;
    public $ross;

    public $governorate_id = [];
    public $car_type_id = [];
    public $color_id = [];
    public $continent_id = [];
    public $cof_id = [];
    public $rental_time_id = [];
    public $motion_vector_id = [];
    public $car_status_id = [];
    public $ad_statuse_id = [];
    public $ros_id = [];
    public $K_from;
    public $K_to;
    public $ads_without_picture;
    public $ads_without_price;
    public $spcial_ad;
    public $P_from;
    public $P_to;
    public $MY_from;
    public $MY_to;

    //real estate
    public $A_size_from;
    public $A_size_to;
    public $L_size_from;
    public $L_size_to;
    public $B_size_from;
    public $B_size_to;
    public $floor_from;
    public $floor_to;
    public $room_count_from;
    public $room_count_to;
    public $elevator;
    public $area_id = [];
    public $neighborhood_id = [];
    public $areas;
    public $land_type_id = [];
    public $land_types;
    public $REMC_id = [];
    public $REMCs;
    public $apartment_status;
    public $apartment_status_id = [];
    public $building_statuse;
    public $building_statuse_id = [];
    public $CAATs;
    public $CAAT_id = [];
    public $neighborhoods;

    //jobs
    public $YOEs;
    public $YOE_id = [];
    public $jobs_categories;
    public $jobs_categorie_id = [];
    public $langs;
    public $lang_id = [];
    public $driving_license;
    public $work_hour_from;
    public $work_hour_to;
    public $extra_work_hour_from;
    public $extra_work_hour_to;
    public $work_hour_rent_from;
    public $work_hour_rent_to;
    public $age_from;
    public $age_to;

    //mobiles
    public $ram_from;
    public $ram_to;
    public $memory_from;
    public $memory_to;
    public $customs_paid;
    public $duration_of_use_from;
    public $duration_of_use_to;


    protected $queryString = [
        'governorate_id', 'car_type_id', 'duration_of_use_from', 'duration_of_use_to',
        'continent_id', 'ros_id',
        'cof_id', 'ad_statuse_id', 'driving_license', 'ram_from', 'ram_to', 'memory_from', 'memory_to', 'customs_paid',
        'rental_time_id', 'car_status_id',
        'motion_vector_id',  'color_id', 'area_id', 'neighborhood_id', 'land_type_id', 'REMC_id', 'lang_id', 'apartment_status_id', 'building_statuse_id', 'CAAT_id', 'YOE_id', 'jobs_categorie_id',
        'K_from', 'K_to',
        'P_from', 'P_to', 'work_hour_from', 'work_hour_to', 'extra_work_hour_from', 'extra_work_hour_to', 'work_hour_rent_from', 'work_hour_rent_to', 'age_from', 'age_to',
        'MY_from', 'MY_to',
        'ads_without_picture', 'ads_without_price',
        'spcial_ad', 'A_size_to', 'A_size_from', 'L_size_to', 'L_size_from', 'B_size_from', 'B_size_to', 'floor_from', 'floor_to', 'room_count_from', 'room_count_to', 'elevator'
    ];

    public function boot()
    {
        $this->category = request('category');
        if ($this->category == 1) { //cars
            $this->colors = Color::all();
            $this->carTypes = CarType::all();
            $this->motion_vectors = MotionVector::all();
            $this->car_status = CarStatus::all();
            $this->governorates = Governorate::all();
            $this->continents = ContinentOfOrigin::all();
            $this->rentalTimes = RentalTime::all();
            $this->ad_statuses = AdStatus::all();
            $this->rentalTimes = RentalTime::all();
            $this->countryOfmans = CountryOfManufacture::all();
            $this->ross = RentOrSale::all();
        } else if ($this->category == 2) { //real estate
            $this->REMCs = RealEstateMainCategory::all();
            $this->building_statuse = BuildingStatus::all();
            $this->governorates = Governorate::all();
            $this->CAATs = CommercialAndArtificialType::all();
            $this->land_types = LandType::all();
            $this->apartment_status = ApartmentStatus::all();
            $this->ad_statuses = AdStatus::all();
            $this->ross = RentOrSale::all();
            $this->rentalTimes = RentalTime::all();
            $this->neighborhoods = Neighborhood::all();
            $this->areas = Area::all();
        } else if ($this->category == 3) { //jobs
            $this->jobs_categories = JobsCategory::all();
            $this->governorates = Governorate::all();
            $this->YOEs = YearsOfExperience::all();
            $this->langs = PersonLangueges::all();
            $this->ad_statuses = AdStatus::all();
            $this->areas = Area::all();
        } else if ($this->category == 4) {
            $this->governorates = Governorate::all();
            $this->ad_statuses = AdStatus::all();
        }
    }
    //ds
    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->category == 1) {
            $this->emit('gotoTop');
            return view('livewire.website.view-ads', [
                'ads' => Cars::where('manger_accept', 2)->when($this->governorate_id, function ($query) {
                    return $query->whereIn('governorate_id', $this->governorate_id);
                })->when($this->car_type_id, function ($query) {
                    return $query->whereIn('car_type_id', $this->car_type_id);
                })->when($this->color_id, function ($query) {
                    return $query->whereIn('color_id', $this->color_id);
                })->when($this->continent_id, function ($query) {
                    return $query->whereIn('continent_id', $this->continent_id);
                })->when($this->car_status_id, function ($query) {
                    return $query->whereIn('car_status_id', $this->car_status_id);
                })->when($this->ros_id, function ($query) {
                    return $query->whereIn('ros_id', $this->ros_id);
                })->when($this->cof_id, function ($query) {
                    return $query->whereIn('cof_id', $this->cof_id);
                })->when($this->ad_statuse_id, function ($query) {
                    return $query->whereIn('ad_statuse_id', $this->ad_statuse_id);
                })->when($this->motion_vector_id, function ($query) {
                    return $query->whereIn('motion_vector_id', $this->motion_vector_id);
                })->when($this->rental_time_id, function ($query) {
                    return $query->whereIn('rental_time_id', $this->rental_time_id);
                })->when($this->K_from && $this->K_to, function ($query) {
                    return $query->whereBetween('kilometrag', [$this->K_from, $this->K_to]);
                })->when($this->ads_without_picture, function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->when($this->ads_without_price, function ($query) {
                    return $query->where('price', null);
                })->when($this->spcial_ad, function ($query) {
                    return $query->where('is_special', 1);
                })->when($this->P_from && $this->P_to, function ($query) {
                    return $query->whereBetween('price', [$this->P_from, $this->P_to]);
                })->when($this->MY_from && $this->MY_to, function ($query) {
                    return $query->whereBetween('manufacturing_year', [$this->MY_from, $this->MY_to]);
                })->latest()->with('governorate')->paginate(20, ['car_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'manufacturing_year', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at'])
            ]);
        } else if ($this->category == 2) {
            $this->emit('gotoTop');
            return view('livewire.website.view-ads', [
                'ads' => RealEstate::where('manger_accept', 2)->when($this->A_size_from && $this->A_size_to, function ($query) {
                    return $query->whereBetween('apartment_size', [$this->A_size_from, $this->A_size_to]);
                })->when($this->L_size_from && $this->L_size_to, function ($query) {
                    return $query->whereBetween('land_size', [$this->L_size_from, $this->L_size_to]);
                })->when($this->B_size_from && $this->B_size_to, function ($query) {
                    return $query->whereBetween('building_size', [$this->B_size_from, $this->B_size_to]);
                })->when($this->floor_from && $this->floor_to, function ($query) {
                    return $query->whereBetween('floor', [$this->floor_from, $this->floor_to]);
                })->when($this->room_count_from && $this->room_count_to, function ($query) {
                    return $query->whereBetween('room_count', [$this->room_count_from, $this->room_count_to]);
                })->when($this->governorate_id, function ($query) {
                    return $query->whereIn('governorate_id', $this->governorate_id);
                })->when($this->building_statuse_id, function ($query) {
                    return $query->whereIn('building_statuse_id', $this->building_statuse_id);
                })->when($this->CAAT_id, function ($query) {
                    return $query->whereIn('CAAT_id', $this->CAAT_id);
                })->when($this->area_id, function ($query) {
                    return $query->whereIn('area_id', $this->area_id);
                })->when($this->REMC_id, function ($query) {
                    return $query->whereIn('REMC_id', $this->REMC_id);
                })->when($this->land_type_id, function ($query) {
                    return $query->whereIn('land_type_id', $this->land_type_id);
                })->when($this->apartment_status_id, function ($query) {
                    return $query->whereIn('apartment_status_id', $this->apartment_status_id);
                })->when($this->neighborhood_id, function ($query) {
                    return $query->whereIn('neighborhood_id', $this->neighborhood_id);
                })->when($this->elevator, function ($query) {
                    return $query->where('elevator', 1);
                })->when($this->car_type_id, function ($query) {
                    return $query->whereIn('car_type_id', $this->car_type_id);
                })->when($this->ros_id, function ($query) {
                    return $query->whereIn('ros_id', $this->ros_id);
                })->when($this->ad_statuse_id, function ($query) {
                    return $query->whereIn('ad_statuse_id', $this->ad_statuse_id);
                })->when($this->rental_time_id, function ($query) {
                    return $query->whereIn('rental_time_id', $this->rental_time_id);
                })->when($this->ads_without_picture, function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->when($this->ads_without_price, function ($query) {
                    return $query->where('price', null);
                })->when($this->spcial_ad, function ($query) {
                    return $query->where('is_special', 1);
                })->when($this->P_from && $this->P_to, function ($query) {
                    return $query->whereBetween('price', [$this->P_from, $this->P_to]);
                })->latest()->with('governorate')->paginate(20, ['real_estate_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at'])
            ]);
        } else if ($this->category == 3) {
            $this->emit('gotoTop');
            return view('livewire.website.view-ads', [
                'ads' => Jobs::where('manger_accept', 2)->when($this->work_hour_from && $this->work_hour_to, function ($query) {
                    return $query->whereBetween('work_hour', [$this->work_hour_from, $this->work_hour_to]);
                })->when($this->extra_work_hour_from && $this->extra_work_hour_to, function ($query) {
                    return $query->whereBetween('extra_work_hour', [$this->extra_work_hour_from, $this->extra_work_hour_to]);
                })->when($this->work_hour_rent_from && $this->work_hour_rent_to, function ($query) {
                    return $query->whereBetween('work_hour_rent', [$this->work_hour_rent_from, $this->work_hour_rent_to]);
                })->when($this->age_from && $this->age_to, function ($query) {
                    return $query->whereBetween('age', [$this->age_from, $this->age_to]);
                })->when($this->governorate_id, function ($query) {
                    return $query->whereIn('governorate_id', $this->governorate_id);
                })->when($this->YOE_id, function ($query) {
                    return $query->whereIn('YOE_id', $this->YOE_id);
                })->when($this->area_id, function ($query) {
                    return $query->whereIn('area_id', $this->area_id);
                })->when($this->jobs_categorie_id, function ($query) {
                    return $query->whereIn('jobs_categorie_id', $this->jobs_categorie_id);
                })->when($this->lang_id, function ($query) {
                    return $query->whereIn('lang_id', $this->lang_id);
                })->when($this->driving_license, function ($query) {
                    return $query->where('driving_license', 1);
                })->when($this->ad_statuse_id, function ($query) {
                    return $query->whereIn('ad_statuse_id', $this->ad_statuse_id);
                })->when($this->ads_without_picture, function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->when($this->ads_without_price, function ($query) {
                    return $query->where('salary', null);
                })->when($this->spcial_ad, function ($query) {
                    return $query->where('is_special', 1);
                })->when($this->P_from && $this->P_to, function ($query) {
                    return $query->whereBetween('salary', [$this->P_from, $this->P_to]);
                })->latest()->with('governorate')->paginate(20, ['job_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'salary', 'manger_accept', 'governorate_id', 'created_at'])
            ]);
        } else if ($this->category == 4) {
            $this->emit('gotoTop');
            return view('livewire.website.view-ads', [
                'ads' => Mobiles::where('manger_accept', 2)->when($this->memory_from && $this->memory_to, function ($query) {
                    return $query->whereBetween('memory', [$this->memory_from, $this->memory_to]);
                })->when($this->ram_from && $this->ram_to, function ($query) {
                    return $query->whereBetween('ram', [$this->ram_from, $this->ram_to]);
                })->when($this->duration_of_use_from && $this->duration_of_use_to, function ($query) {
                    return $query->whereBetween('duration_of_use', [$this->duration_of_use_from, $this->duration_of_use_to]);
                })->when($this->governorate_id, function ($query) {
                    return $query->whereIn('governorate_id', $this->governorate_id);
                })->when($this->customs_paid, function ($query) {
                    return $query->where('customs_paid', 1);
                })->when($this->ad_statuse_id, function ($query) {
                    return $query->whereIn('ad_statuse_id', $this->ad_statuse_id);
                })->when($this->ads_without_picture, function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->when($this->ads_without_price, function ($query) {
                    return $query->where('price', null);
                })->when($this->spcial_ad, function ($query) {
                    return $query->where('is_special', 1);
                })->when($this->P_from && $this->P_to, function ($query) {
                    return $query->whereBetween('price', [$this->P_from, $this->P_to]);
                })->latest()->with('governorate')->paginate(20, ['mobile_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at'])
            ]);
        } else {
            abort(404, __('This Category Is Not Active Yet'));
        }
    }
}
