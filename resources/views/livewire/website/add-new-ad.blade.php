<div>

    <form wire:submit.prevent="add">
        @if ($errors->any())
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <div>
                            <h5 class="text-muted">{{ __('Some Field Need To be Fixed') }}</h5>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"><span class="text-muted">{{ $error }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="card p-3">
                <h4>{{ __('Ad Type') }}</h4>
                <div class="container text-center mb-2">
                    <div class="row card bg-white rounded-lg border-0">
                        <div class="btn-group" role="group">
                            @forelse ($ad_types as $key => $ad_type)
                                <input type="radio" class="btn-check" wire:model="ad_type_id"
                                    id="ad_type_id{{ $key }}" autocomplete="off"
                                    value="{{ $ad_type->ad_type_id }}">
                                <label class="mx-3 btn btn-block btn-outline-dark"
                                    for="ad_type_id{{ $key }}">{{ app()->getLocale() == 'ar' ? $ad_type->ar_name : $ad_type->en_name }}<br>
                                    <b><i>{{ __('You Have ') }}
                                            {{ $ad_type->count }}
                                            {{ __('Ad') }}</i></b>
                                </label>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4>{{ __('Main Category') }}</h4>
                    </div>
                    <div class="col-12 col-md-6">
                        <select wire:model="category" id="category" class="form-control">
                            <option value="1" selected>{{ __('Cars') }}</option>
                            <option value="2">{{ __('Real Estate') }}</option>
                            <option value="3">{{ __('Jobs') }}</option>
                            <option value="4">{{ __('Mobiles') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @if ($category == 2)
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Real Estate Main Category') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="REMC_id" id="REMC_id">
                                @if ($real_estate_main_categorys)
                                    @forelse ($real_estate_main_categorys as $real_estate_main_category)
                                        <option value="{{ $real_estate_main_category->REMC_id }}">
                                            {{ app()->getLocale() == 'ar' ? $real_estate_main_category->ar_name ?? '' : $real_estate_main_category->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            @if ($REMC_id == 4 || $REMC_id == 5)
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6>{{ __('Commercial And Artificial Type') }}
                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="CAAT_id" id="CAAT_id">
                                    @if ($CAATs)
                                        <option value="0">{{ __('Choose') }}</option>
                                        @forelse ($CAATs as $CAAT)
                                            <option value="{{ $CAAT->CAAT_id }}">
                                                {{ app()->getLocale() == 'ar' ? $CAAT->ar_name ?? '' : $CAAT->en_name ?? '' }}
                                            </option>
                                        @empty
                                        @endforelse
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        @if ($category != 3 && $category != 4)
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="container text-center mb-2">
                        <div class="row card bg-white rounded-lg border-0">
                            <div class="" role="group">
                                <div class="row">
                                    @forelse ($rent_or_sales as $key => $rent_or_sale)
                                        <div class="col-12 col-md-6">
                                            <input type="radio" class="btn-check" wire:model="ros_id"
                                                id="ros_id{{ $key }}" autocomplete="off"
                                                value="{{ $rent_or_sale->ros_id }}">
                                            <label class="my-2 btn btn-block btn-outline-dark w-100"
                                                for="ros_id{{ $key }}">{{ app()->getLocale() == 'ar' ? $rent_or_sale->ar_name : $rent_or_sale->en_name }}
                                            </label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('English Title') }}</h6>
                <input type="text" wire:model="en_title" id="en_title"
                    placeholder="{{ __('Enter English Title') }}" class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('Arabic Title') }}</h6>
                <input type="text" wire:model="ar_title" id="ar_title" placeholder="{{ __('Enter Arabic Title') }}"
                    class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('English Description') }}</h6>
                <textarea rows="3" wire:model="en_desc" id="en_desc" placeholder="{{ __('Enter English Description') }}"
                    class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('Arabic Description') }}</h6>
                <textarea rows="3" wire:model="ar_desc" id="ar_desc" placeholder="{{ __('Enter Arabic Description') }}"
                    class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('Picture') }}</h6>
                <div class="row">
                    <div class="col-12 mb-3">
                        <input class="form-control" type="file" wire:model="picture" id="picture" multiple>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            @if ($picture)
                                @forelse ($picture as $pic)
                                    <div class="col-6 col-md-3">
                                        <img src="{{ $pic->temporaryUrl() }}" alt="preview pictures" width="175px">
                                    </div>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ $category == 1 || $category == 2 || $category == 4 ? __('Price') : __('Salary') }}
                </h6>
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input class="form-control" type="number"
                            wire:model="{{ $category == 1 || $category == 2 || $category == 4 ? 'price' : 'salary' }}"
                            id="{{ $category == 1 || $category == 2 || $category == 4 ? 'price' : 'salary' }}"
                            aria-label="Recipient's username" aria-describedby="basic-addon22">
                        <span class="input-group-text" id="basic-addon22">{{ __('SYP') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6>{{ __('Governorate') }}
                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-control" wire:model="governorate_id" id="governorate_id">
                            @if ($governorates)
                                @forelse ($governorates as $governorate)
                                    <option value="{{ $governorate->governorate_id }}">
                                        {{ app()->getLocale() == 'ar' ? $governorate->ar_name ?? '' : $governorate->en_name ?? '' }}
                                    </option>
                                @empty
                                @endforelse
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @if ($category == 1)
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Manufacturing Year') }}
                    </h6>
                    <div class="col-12">
                        {{-- <input class="form-control" type="number" wire:model="manufacturing_year"
                            id="manufacturing_year"> --}}
                        <select wire:model="manufacturing_year" class="form-control">
                            @for ($i = 1980; $i <= date('Y'); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Kilometrag') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="kilometrag" id="kilometrag"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('K.M') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Car Type') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="car_type_id" id="car_type_id">
                                @if ($car_types)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($car_types as $car_type)
                                        <option value="{{ $car_type->car_type_id }}">
                                            {{ app()->getLocale() == 'ar' ? $car_type->ar_name ?? '' : $car_type->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Car Status') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="car_status_id" id="car_status_id">
                                @if ($car_status)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($car_status as $car_statu)
                                        <option value="{{ $car_statu->car_status_id }}">
                                            {{ app()->getLocale() == 'ar' ? $car_statu->ar_name ?? '' : $car_statu->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{--  --}}
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Transmision Vector') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="motion_vector_id" id="motion_vector_id">
                                @if ($motion_vectors)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($motion_vectors as $motion_vector)
                                        <option value="{{ $motion_vector->motion_vector_id }}">
                                            {{ app()->getLocale() == 'ar' ? $motion_vector->ar_name ?? '' : $motion_vector->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Region Of Origin') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="continent_id" id="continent_id">
                                @if ($continent_of_origins)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($continent_of_origins as $continent_of_origin)
                                        <option value="{{ $continent_of_origin->continent_id }}">
                                            {{ app()->getLocale() == 'ar' ? $continent_of_origin->ar_name ?? '' : $continent_of_origin->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Country Of Manufacture') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="cof_id" id="cof_id">
                                @if ($country_of_manufactures)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($country_of_manufactures as $country_of_manufacture)
                                        <option value="{{ $country_of_manufacture->cof_id }}">
                                            {{ app()->getLocale() == 'ar' ? $country_of_manufacture->ar_name ?? '' : $country_of_manufacture->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            @if ($ros_id == 2)
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6>{{ __('Rental Time') }}
                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="rental_time_id" id="rental_time_id">
                                    @if ($rental_times)
                                        <option value="0">{{ __('Choose') }}</option>
                                        @forelse ($rental_times as $rental_time)
                                            <option value="{{ $rental_time->rental_time_id }}">
                                                {{ app()->getLocale() == 'ar' ? $rental_time->ar_rent_name ?? '' : $rental_time->en_rent_name ?? '' }}
                                            </option>
                                        @empty
                                        @endforelse
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Color') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="color_id" id="color_id">
                                @if ($colors)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($colors as $color)
                                        <option value="{{ $color->color_id }}">
                                            {{ app()->getLocale() == 'ar' ? $color->ar_name ?? '' : $color->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($category == 2)
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Apartment Size') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="apartment_size"
                                id="apartment_size" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('M') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Land Size') }}
                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="land_size" id="land_size">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Building Size') }}
                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="building_size" id="building_size">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Floor') }}
                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="number" wire:model="floor" id="floor">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Room Count') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="room_count" id="room_count"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('Room') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Elevator') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="elevator" id="elevator0"
                                            autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="elevator0">{{ __('No') }}
                                        </label>
                                        <input type="radio" class="btn-check" wire:model="elevator" id="elevator1"
                                            autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="elevator1">{{ __('Yes') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($REMC_id == 1)
            @endif
            @if ($REMC_id == 2)
            @endif
            @if ($REMC_id == 3)
                <br>
                <div class="container">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h6>{{ __('Apartment Status') }}
                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="form-control" wire:model="apartment_status_id"
                                    id="apartment_status_id">
                                    @if ($apartment_status)
                                        <option value="0">{{ __('Choose') }}</option>
                                        @forelse ($apartment_status as $apartment_statu)
                                            <option value="{{ $apartment_statu->apartment_status_id }}">
                                                {{ app()->getLocale() == 'ar' ? $apartment_statu->ar_name ?? '' : $apartment_statu->en_name ?? '' }}
                                            </option>
                                        @empty
                                        @endforelse
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($REMC_id == 4)
            @endif
            @if ($REMC_id == 5)
            @endif
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Building Status') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="building_statuse_id" id="building_statuse_id">
                                @if ($building_status)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($building_status as $building_statu)
                                        <option value="{{ $building_statu->building_statuse_id }}">
                                            {{ app()->getLocale() == 'ar' ? $building_statu->ar_name ?? '' : $building_statu->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Land Type') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="land_type_id" id="land_type_id">
                                @if ($land_types)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($land_types as $land_type)
                                        <option value="{{ $land_type->land_type_id }}">
                                            {{ app()->getLocale() == 'ar' ? $land_type->ar_name ?? '' : $land_type->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Area') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="area_id" id="area_id">
                                @if ($areas)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($areas as $area)
                                        <option value="{{ $area->area_id }}">
                                            {{ app()->getLocale() == 'ar' ? $area->ar_name ?? '' : $area->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Neighborhood') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="neighborhood_id" id="neighborhood_id">
                                @if ($neighborhoods)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($neighborhoods as $neighborhood)
                                        <option value="{{ $neighborhood->neighborhood_id }}">
                                            {{ app()->getLocale() == 'ar' ? $neighborhood->ar_name ?? '' : $neighborhood->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($category == 3)
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Job Category') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="jobs_categorie_id" id="jobs_categorie_id">
                                @if ($jobs_categories)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($jobs_categories as $jobs_categorie)
                                        <option value="{{ $jobs_categorie->jobs_categorie_id }}">
                                            {{ app()->getLocale() == 'ar' ? $jobs_categorie->ar_name ?? '' : $jobs_categorie->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Qualification') }}
                    </h6>
                    <div class="col-12">
                        <input class="form-control" type="text" wire:model="qualification" id="qualification">
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Age') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="age" id="age"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('Year') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Work Hour') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="work_hour" id="work_hour"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('Hour') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Extra Work Hour') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="extra_work_hour"
                                id="extra_work_hour" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('Hour') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Work Hour Rent') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="work_hour_rent"
                                id="work_hour_rent" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('SYP') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Driving License') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="driving_license"
                                            id="driving_license0" autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="driving_license0">{{ __('No') }}
                                        </label>
                                        <input type="radio" class="btn-check" wire:model="driving_license"
                                            id="driving_license1" autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="driving_license1">{{ __('Yes') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Area') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="area_id" id="area_id">
                                @if ($areas)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($areas as $area)
                                        <option value="{{ $area->area_id }}">
                                            {{ app()->getLocale() == 'ar' ? $area->ar_name ?? '' : $area->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Person Langueges') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="lang_id" id="lang_id">
                                @if ($langs)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($langs as $lang)
                                        <option value="{{ $lang->lang_id }}">
                                            {{ app()->getLocale() == 'ar' ? $lang->ar_name ?? '' : $lang->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Years Of Experience') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <select class="form-control" wire:model="YOE_id" id="YOE_id">
                                @if ($YOEs)
                                    <option value="0">{{ __('Choose') }}</option>
                                    @forelse ($YOEs as $YOE)
                                        <option value="{{ $YOE->YOE_id }}">
                                            {{ app()->getLocale() == 'ar' ? $YOE->ar_name ?? '' : $YOE->en_name ?? '' }}
                                        </option>
                                    @empty
                                    @endforelse
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($category == 4)
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Ram') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="ram" id="ram"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('GB') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Memory') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="memory" id="memory"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('GB') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <h6>{{ __('Duration Of Use') }}
                    </h6>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" wire:model="duration_of_use"
                                id="duration_of_use" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">{{ __('Year') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6>{{ __('Customs Paid') }}
                            </h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container text-center mb-2">
                                <div class="row card bg-white rounded-lg border-0">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" wire:model="customs_paid"
                                            id="customs_paid0" autocomplete="off" value="0">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="customs_paid0">{{ __('No') }}
                                        </label>
                                        <input type="radio" class="btn-check" wire:model="customs_paid"
                                            id="customs_paid1" autocomplete="off" value="1">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="customs_paid1">{{ __('Yes') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6>{{ __('Ad Status') }}
                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="container text-center mb-2">
                            <div class="row card bg-white rounded-lg border-0">
                                <div class="btn-group" role="group">
                                    @forelse ($ad_statuses as $key => $ad_statuse)
                                        <input type="radio" class="btn-check" wire:model="ad_statuse_id"
                                            id="ad_statuse_id{{ $key }}" autocomplete="off"
                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                        <label class="mx-3 btn btn-block btn-outline-dark"
                                            for="ad_statuse_id{{ $key }}">{{ app()->getLocale() == 'ar' ? $ad_statuse->ar_name : $ad_statuse->en_name }}
                                        </label>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <h6>{{ __('Phone Number') }}</h6>
                <input type="text" wire:model="phone_number" id="phone_number"
                    placeholder="{{ __('Enter Phone Number') }}" class="form-control">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h6>{{ __('Phone Number Status') }}
                        </h6>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="container text-center mb-2">
                            <div class="row card bg-white rounded-lg border-0">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" wire:model="isPhone_visable"
                                        id="isPhone_visable0" autocomplete="off" value="0">
                                    <label class="mx-3 btn btn-block btn-outline-dark"
                                        for="isPhone_visable0">{{ __('Hidden') }}
                                    </label>
                                    <input type="radio" class="btn-check" wire:model="isPhone_visable"
                                        id="isPhone_visable1" autocomplete="off" value="1">
                                    <label class="mx-3 btn btn-block btn-outline-dark"
                                        for="isPhone_visable1">{{ __('Visable') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center my-2">
            <button type="submit" class="mt-3 btn btn-outline-dark w-75">{{ __('Create') }}</button><br />
        </div>
    </form>
</div>
