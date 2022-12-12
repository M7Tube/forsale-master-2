<div class="container-fluid">
    <div class="d-flex justify-content-center">
        <div wire:loading>
            <div class="lds-roller mx-auto">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    @if ($category == 1)
        <h5 class="mb-5">{{ __('Cars') }}</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        {{--  --}} data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        {{ __('Filters') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    {{--  --}} data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ad Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Ad Status') }}
                                                                                </option>
                                                                                @forelse ($ad_statuses as $ad_statuse)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ad_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Governorate') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Governorate') }}
                                                                                </option>
                                                                                @forelse ($governorates as $governorate)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('governorate_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Car Type') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_type_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Car Type') }}
                                                                                </option>
                                                                                @forelse ($carTypes as $carType)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $carType->car_type_id }}">
                                                                                            {{ $carType->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $carType->car_type_id }}">
                                                                                            {{ $carType->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('car_type_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Car Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_status_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Car Status') }}
                                                                                </option>
                                                                                @forelse ($car_status as $car_statu)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $car_statu->car_status_id }}">
                                                                                            {{ $car_statu->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $car_statu->car_status_id }}">
                                                                                            {{ $car_statu->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('car_status_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Color') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="color_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Color') }}
                                                                                </option>
                                                                                @forelse ($colors as $color)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $color->color_id }}">
                                                                                            {{ $color->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $color->color_id }}">
                                                                                            {{ $color->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('color_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rent Or Sale') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ros_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($ross as $ros)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ros_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Region Of Origin') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="continent_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($continents as $key => $continent)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $continent->continent_id }}">
                                                                                            {{ $continent->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $continent->continent_id }}">
                                                                                            {{ $continent->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('continent_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Transmision Vector') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="motion_vector_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($motion_vectors as $key => $motion_vector)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $motion_vector->motion_vector_id }}">
                                                                                            {{ $motion_vector->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $motion_vector->motion_vector_id }}">
                                                                                            {{ $motion_vector->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('motion_vector_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Country Of Manufacture') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="cof_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Country Of Manufacture') }}
                                                                                </option>
                                                                                @forelse ($countryOfmans as $key => $countryOfman)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $countryOfman->cof_id }}">
                                                                                            {{ $countryOfman->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $countryOfman->cof_id }}">
                                                                                            {{ $countryOfman->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('cof_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Kilometer Counter') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_from" />
                                                                            <span class="text-danger">
                                                                                @error('K_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $K_from }}"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_to" />
                                                                            <span class="text-danger">
                                                                                @error('K_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Price Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                @error('P_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $P_from }}"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                @error('P_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Manufacturing Year Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_from" />
                                                                            <span class="text-danger">
                                                                                @error('MY_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $MY_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_to" />
                                                                            <span class="text-danger">
                                                                                @error('MY_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Options') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Picture') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Price') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Spcial Ad') }}</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rental Time') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="rental_time_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Rental Time') }}
                                                                                </option>
                                                                                @forelse ($rentalTimes as $rentalTime)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->ar_rent_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->en_rent_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('rental_time_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <div wire:loading>
                <div class="lds-roller mx-auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> --}}
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            @if ($ads)
                @forelse ($ads as $ad)
                    @if (app()->getLocale() == 'ar')
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->ar_title ?? $ad->en_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->en_title ?? $ad->ar_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $ads->links() }}
                </div>
            @else
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endif
        </div>
    @endif
    @if ($category == 2)
        <h5 class="mb-5">{{ __('Real Estate') }}</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        {{--  --}} data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        {{ __('Filters') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    {{--  --}} data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Real Estate Main Category') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="REMC_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($REMCs as $REMC)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $REMC->REMC_id }}">
                                                                                            {{ $REMC->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $REMC->REMC_id }}">
                                                                                            {{ $REMC->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('REMC_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Commercial And Artificial Type') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="CAAT_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($CAATs as $CAAT)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $CAAT->CAAT_id }}">
                                                                                            {{ $CAAT->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $CAAT->CAAT_id }}">
                                                                                            {{ $CAAT->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('CAAT_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Apartment Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="apartment_status_id"
                                                                                multiple data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($apartment_status as $apartment_statu)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $apartment_statu->apartment_status_id }}">
                                                                                            {{ $apartment_statu->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $apartment_statu->apartment_status_id }}">
                                                                                            {{ $apartment_statu->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('apartment_status_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Building Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="building_statuse_id"
                                                                                multiple data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($building_statuse as $building_status)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $building_status->building_statuse_id }}">
                                                                                            {{ $building_status->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $building_status->building_statuse_id }}">
                                                                                            {{ $building_status->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('building_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ad Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Ad Status') }}
                                                                                </option>
                                                                                @forelse ($ad_statuses as $ad_statuse)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ad_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Governorate') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Governorate') }}
                                                                                </option>
                                                                                @forelse ($governorates as $governorate)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('governorate_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Area') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="area_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($areas as $area)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $area->area_id }}">
                                                                                            {{ $area->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $area->area_id }}">
                                                                                            {{ $area->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('area_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Neighborhood') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="neighborhood_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($neighborhoods as $neighborhood)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $neighborhood->neighborhood_id }}">
                                                                                            {{ $neighborhood->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $neighborhood->neighborhood_id }}">
                                                                                            {{ $neighborhood->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('neighborhood_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Land Type') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="land_type_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($land_types as $land_type)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $land_type->land_type_id }}">
                                                                                            {{ $land_type->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $land_type->land_type_id }}">
                                                                                            {{ $land_type->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('land_type_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rent Or Sale') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ros_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($ross as $ros)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ros_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Apartment Size') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="A_size_from" />
                                                                            <span class="text-danger">
                                                                                @error('A_size_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $A_size_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="A_size_to" />
                                                                            <span class="text-danger">
                                                                                @error('A_size_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Land Size') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="L_size_from" />
                                                                            <span class="text-danger">
                                                                                @error('L_size_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $L_size_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="L_size_to" />
                                                                            <span class="text-danger">
                                                                                @error('L_size_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Building Size') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="B_size_from" />
                                                                            <span class="text-danger">
                                                                                @error('B_size_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $B_size_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="B_size_to" />
                                                                            <span class="text-danger">
                                                                                @error('B_size_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Floor') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="floor_from" />
                                                                            <span class="text-danger">
                                                                                @error('floor_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $floor_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="floor_to" />
                                                                            <span class="text-danger">
                                                                                @error('floor_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Room Count') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="room_count_from" />
                                                                            <span class="text-danger">
                                                                                @error('room_count_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $room_count_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="room_count_to" />
                                                                            <span class="text-danger">
                                                                                @error('room_count_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Price Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                @error('P_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $P_from }}"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                @error('P_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Options') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="elevator">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Elevator') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Picture') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Price') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Spcial Ad') }}</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rental Time') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="rental_time_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Rental Time') }}
                                                                                </option>
                                                                                @forelse ($rentalTimes as $rentalTime)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->ar_rent_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->en_rent_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('rental_time_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <div wire:loading>
                <div class="lds-roller mx-auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> --}}
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            @if ($ads)
                @forelse ($ads as $ad)
                    @if (app()->getLocale() == 'ar')
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->ar_title ?? $ad->en_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 2, 'id' => $ad->real_estate_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->en_title ?? $ad->ar_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $ads->links() }}
                </div>
            @else
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endif
        </div>
    @endif
    @if ($category == 3)
        <h5 class="mb-5">{{ __('Jobs') }}</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        {{--  --}} data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        {{ __('Filters') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    {{--  --}} data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Job Category') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="jobs_categorie_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($jobs_categories as $jobs_categorie)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $jobs_categorie->jobs_categorie_id }}">
                                                                                            {{ $jobs_categorie->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $jobs_categorie->jobs_categorie_id }}">
                                                                                            {{ $jobs_categorie->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('jobs_categorie_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Person Languages') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="lang_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($langs as $lang)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $lang->lang_id }}">
                                                                                            {{ $lang->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $lang->lang_id }}">
                                                                                            {{ $lang->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('lang_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Years Of Experience') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="YOE_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($YOEs as $YOE)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $YOE->YOE_id }}">
                                                                                            {{ $YOE->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $YOE->YOE_id }}">
                                                                                            {{ $YOE->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('YOE_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ad Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Ad Status') }}
                                                                                </option>
                                                                                @forelse ($ad_statuses as $ad_statuse)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ad_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Governorate') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Governorate') }}
                                                                                </option>
                                                                                @forelse ($governorates as $governorate)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('governorate_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Area') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="area_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($areas as $area)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $area->area_id }}">
                                                                                            {{ $area->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $area->area_id }}">
                                                                                            {{ $area->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('area_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Work Hour') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_from" />
                                                                            <span class="text-danger">
                                                                                @error('work_hour_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $work_hour_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_to" />
                                                                            <span class="text-danger">
                                                                                @error('work_hour_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Extra Work Hour') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="extra_work_hour_from" />
                                                                            <span class="text-danger">
                                                                                @error('extra_work_hour_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $extra_work_hour_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="extra_work_hour_to" />
                                                                            <span class="text-danger">
                                                                                @error('extra_work_hour_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Work Hour Rent') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_rent_from" />
                                                                            <span class="text-danger">
                                                                                @error('work_hour_rent_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $work_hour_rent_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="work_hour_rent_to" />
                                                                            <span class="text-danger">
                                                                                @error('work_hour_rent_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Age') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="age_from" />
                                                                            <span class="text-danger">
                                                                                @error('age_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $age_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="age_to" />
                                                                            <span class="text-danger">
                                                                                @error('age_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Salary Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                @error('P_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $P_from }}"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                @error('P_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Options') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="driving_license">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Driving License') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Picture') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Price') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Spcial Ad') }}</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <div wire:loading>
                <div class="lds-roller mx-auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> --}}
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            @if ($ads)
                @forelse ($ads as $ad)
                    @if (app()->getLocale() == 'ar')
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->salary ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->ar_title ?? $ad->en_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 3, 'id' => $ad->job_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->salary ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->en_title ?? $ad->ar_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $ads->links() }}
                </div>
            @else
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endif
        </div>
    @endif
    @if ($category == 4)
        <h5 class="mb-5">{{ __('Mobiles') }}</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample" wire:loading.remove>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        {{--  --}} data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        {{ __('Filters') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    {{--  --}} data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ad Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Ad Status') }}
                                                                                </option>
                                                                                @forelse ($ad_statuses as $ad_statuse)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ad_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Governorate') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Governorate') }}
                                                                                </option>
                                                                                @forelse ($governorates as $governorate)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('governorate_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ram') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="ram_from" />
                                                                            <span class="text-danger">
                                                                                @error('ram_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $ram_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="ram_to" />
                                                                            <span class="text-danger">
                                                                                @error('ram_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Memory') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="memory_from" />
                                                                            <span class="text-danger">
                                                                                @error('memory_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $memory_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="memory_to" />
                                                                            <span class="text-danger">
                                                                                @error('memory_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Duration Of Use') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="duration_of_use_from" />
                                                                            <span class="text-danger">
                                                                                @error('duration_of_use_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $duration_of_use_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="duration_of_use_to" />
                                                                            <span class="text-danger">
                                                                                @error('duration_of_use_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Price Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                @error('P_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control"
                                                                                id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $P_from }}"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                @error('P_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Options') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="customs_paid">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Customs Paid') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Picture') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Price') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Spcial Ad') }}</label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <div wire:loading>
                <div class="lds-roller mx-auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> --}}
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            @if ($ads)
                @forelse ($ads as $ad)
                    @if (app()->getLocale() == 'ar')
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $ad->mobile_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->ar_title ?? $ad->en_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 4, 'id' => $ad->mobile_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->en_title ?? $ad->ar_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $ads->links() }}
                </div>
            @else
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endif
        </div>
    @endif
</div>
