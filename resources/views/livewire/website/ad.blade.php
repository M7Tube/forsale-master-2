<div>
    @if (app()->getLocale() == 'ar')
        @if (request('category') == 1)
            {{-- ======= CARS ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->ar_title ?? $ad->en_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->ar_desc ?? $ad->en_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Manufacturing Year') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->manufacturing_year ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Kilometrag') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->kilometrag ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Car Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->CarStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Rent Or Sale') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RentOrSale->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Transmision Vector') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->MotionVector->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Color') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Color->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Car Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->CarStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Rental Time') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RentalTime->ar_rent_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))
                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(1,{{ $ad->car_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(1,{{ $ad->car_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF CARS ======= --}}
        @elseif(request('category') == 2)
            {{-- ======= Real Estate ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->ar_title ?? $ad->en_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->ar_desc ?? $ad->en_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Real Estate Main Category') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RealEstateMainCategory->ar_name ?? __('Empty') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Apartment Status') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->ApartmentStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Land Size') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->land_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Building Size') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->building_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Floor') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->floor ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Room Count') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->room_count ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Apartment Size') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->apartment_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Elevator') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->elevator == 1 ? __('Yes') : __('No') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Commercial And Artificial Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            {{ $ad->CommercialAndArtificialType->ar_name ?? __('Empty') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Building Status') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->BuildingStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Land Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->LandType->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Area') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Area->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Neighborhood') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Neighborhood->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))
                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(2,{{ $ad->real_estate_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(2,{{ $ad->real_estate_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF RealEstate ======= --}}
        @elseif(request('category') == 3)
            {{-- ======= Jobs ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->ar_title ?? $ad->en_title }}</h4>
                                <h5>{{ __('Salary') }} : {{ $ad->salary ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->JobCategory->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->YearsOfExperience->ar_name ?? '' }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->ar_desc ?? $ad->en_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Job Category') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->JobCategory->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Person Langueges') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->PersonLanguage->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Years Of Experience') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->YearsOfExperience->ar_name ?? __('Empty') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Qualification') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->qualification ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Age') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->age ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Work Hour') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->work_hour ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Extra Work Hour') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->extra_work_hour ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Work Hour Rent') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->work_hour_rent ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Driving License') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->driving_license == 1 ? __('Yes') : __('No') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))
                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(3,{{ $ad->job_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(3,{{ $ad->job_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF Mobiles ======= --}}
        @elseif(request('category') == 4)
            {{-- ======= Mobiles ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->ar_title ?? $ad->en_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->ar_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->JobCategory->ar_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->YearsOfExperience->ar_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 4)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->ar_name ?? '' }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->ar_desc ?? $ad->en_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->ar_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ram') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->ram ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Memory') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->memory ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Duration Of Use') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->duration_of_use ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Customs Paid') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->customs_paid == 1 ? __('Yes') : __('No') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))
                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(4,{{ $ad->mobile_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(4,{{ $ad->mobile_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF Mobiles ======= --}}
        @endif
    @else
        @if (request('category') == 1)
            {{-- ======= CARS ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->en_title ?? $ad->ar_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->en_desc ?? $ad->ar_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Manufacturing Year') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->manufacturing_year ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Kilometrag') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->kilometrag ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Car Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->CarStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Rent Or Sale') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RentOrSale->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Transmision Vector') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->MotionVector->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Color') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Color->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Car Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->CarStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Rental Time') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RentalTime->en_rent_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))

                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(1,{{ $ad->car_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(1,{{ $ad->car_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF CARS ======= --}}
        @elseif(request('category') == 2)
            {{-- ======= Real Estate ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->en_title ?? $ad->ar_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->en_desc ?? $ad->ar_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Real Estate Main Category') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            {{ $ad->RealEstateMainCategory->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Rent Or Sale') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->RentOrSale->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Apartment Status') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->ApartmentStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Land Size') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->land_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Building Size') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->building_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Floor') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->floor ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Room Count') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->room_count ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Apartment Size') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->apartment_size ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Elevator') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->elevator == 1 ? __('Yes') : __('No') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Commercial And Artificial Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">
                                            {{ $ad->CommercialAndArtificialType->en_name ?? __('Empty') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Building Status') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->BuildingStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Land Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->LandType->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Area') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Area->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Neighborhood') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->Neighborhood->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))

                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(2,{{ $ad->real_estate_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(2,{{ $ad->real_estate_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF RealEstate ======= --}}
        @elseif(request('category') == 3)
            {{-- ======= Jobs ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->en_title ?? $ad->ar_title }}</h4>
                                <h5>{{ __('Salary') }} : {{ $ad->salary ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->JobCategory->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->YearsOfExperience->en_name ?? '' }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->en_desc ?? $ad->ar_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Real Estate Main Category') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->JobCategory->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">
                                        {{ __('Real Estate Main Category') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->PersonLanguage->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Apartment Status') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->YearsOfExperience->en_name ?? __('Empty') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Qualification') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->qualification ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Age') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->age ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Work Hour') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->work_hour ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Extra Work Hour') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->extra_work_hour ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Work Hour Rent') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->work_hour_rent ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Driving License') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->driving_license == 1 ? __('Yes') : __('No') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))

                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(3,{{ $ad->job_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(3,{{ $ad->job_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF Jobs ======= --}}
        @elseif(request('category') == 4)
            {{-- ======= Mobiles ======= --}}
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="p-4">
                                <h4>{{ $ad->en_title ?? $ad->ar_title }}</h4>
                                <h5>{{ __('Price') }} : {{ $ad->price ?? 0 }} {{ __('SYP') }}</h5>
                                @if (\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays() . __(' Days') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInHours() . __(' Hours') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() > 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInMinutes() . __(' Minute') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @elseif(\Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() >= 0)
                                    <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                        {{ \Carbon\Carbon::parse($ad->created_at ?? '')->addDays(\Carbon\Carbon::parse($ad->created_at ?? '')->diffInDays())->diffInSeconds() . __(' Seconds') }}
                                        | <i class="bi bi-geo-alt-fill"></i>
                                        {{ $ad->governorate->en_name ?? '' }} | <i class="bi bi-person"></i>
                                        {{ $ad->User->first_name ?? '' }} {{ $ad->User->last_name ?? '' }}
                                    </span>
                                @endif
                                @if (request('category') == 1)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Cars') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CarType->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->ContinentOfOrigins->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->CountryOfManufacture->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 2)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Real Estate') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Neighborhood->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->Area->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 3)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->JobCategory->en_name ?? '' }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->YearsOfExperience->en_name ?? '' }}</span>
                                    </h6>
                                @elseif (request('category') == 4)
                                    <h6>
                                        <span class="badge rounded-pill bg-secondary">{{ __('Jobs') }}</span>
                                        <span
                                            class="badge rounded-pill bg-secondary">{{ $ad->governorate->en_name ?? '' }}</span>
                                    </h6>
                                @endif
                                <div class="d-flex justify-content-left mb-2">
                                    <h6>
                                        <i class="bi bi-eye"></i> {{ $ad->watch_count ?? '' }}
                                    </h6>
                                </div>
                                {{ __('Descriptions : ') }} <br>
                                <p>
                                    {{ $ad->en_desc ?? $ad->ar_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="container mt-1">
                                <div class="carousel-container position-relative row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($ad['picture'])
                                                @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                    @if (file_exists('../storage/app/img/' . $pic))
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                            data-slide-number="{{ $key }}">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="d-block w-100" alt="..."
                                                                data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                data-type="image" data-toggle="lightbox"
                                                                data-gallery="example-gallery">
                                                        </div>
                                                    @endif
                                                @empty
                                                @endforelse
                                            @else
                                                <div class="carousel-item active" data-slide-number="0">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        class="d-block w-100" alt="..."
                                                        data-remote="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                        data-type="image" data-toggle="lightbox"
                                                        data-gallery="example-gallery">
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row mx-0">
                                                    @if ($ad['picture'])
                                                        @forelse (json_decode($ad['picture']) as $key =>  $pic)
                                                            @if (file_exists('../storage/app/img/' . $pic))
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $pic)) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @else
                                                                <div id="carousel-selector-{{ $key }}"
                                                                    class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                                    data-target="#myCarousel"
                                                                    data-slide-to="{{ $key }}">
                                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                        class="img-fluid" alt="...">
                                                                </div>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    @else
                                                        <div id="carousel-selector-0"
                                                            class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                                            data-target="#myCarousel" data-slide-to="0">
                                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Previous') }}</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">{{ __('Next') }}</span>
                                        </a>
                                    </div>

                                </div> <!-- /row -->
                            </div> <!-- /container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card p-3">
                            <h5>{{ __('Specifications : ') }}</h5>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Status') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdStatus->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ad Type') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->AdType->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Governorate') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->governorate->en_name ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Ram') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->ram ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Memory') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->memory ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Duration Of Use') }}</div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->duration_of_use ?? __('Empty') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-2 my-1" style="background-color:#F2F2F2;">
                                <div class="row">
                                    <div class="col-6" style="color: #33333384;">{{ __('Customs Paid') }}
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <div class="col-6">{{ $ad->customs_paid == 1 ? __('Yes') : __('No') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3 text-center">
                        @if (session()->get('WebLoggedIn', []))
                            @if (!$is_favorite)
                                <button wire:click.prevent="ATF(4,{{ $ad->mobile_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart"></i> {{ __('Add To Favorite') }}
                                </button>
                            @else
                                <button wire:click.prevent="ATF(4,{{ $ad->mobile_id }})"
                                    class="btn btn-block btn-outline-dark">
                                    <i class="bi bi-heart-fill"></i> {{ __('Remove Form Favorite') }}
                                </button>
                            @endif
                        @endif
                        <br>
                        @if ($ad->isPhone_visable == 1)
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;" {{ $ad->phone_number ?? 'disabled' }}>
                                <i class="bi bi-telephone"></i> {{ $ad->phone_number ?? __('Empty') }}
                            </button>
                        @else
                            <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                                style="background-color: #C1C1C1;">
                                <i class="bi bi-telephone"></i> 09xxxxxxxx
                            </button>
                        @endif
                        <br>
                        <button wire:click.prevent="" class="btn btn-block w-100 my-2"
                            style="background-color: #C1C1C1;">
                            <i class="bi bi-chat-square-text"></i> {{ __('Contact') }}
                        </button>
                        <br>
                        <div class="mt-3">
                            <i class="bi bi-share"></i>
                            {{ __('Share The Ad') }}
                            <div class="d-flex justify-content-center mb-2">
                                <h2 class="mt-2">{!! $shareComponent !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =======END OF Mobiles ======= --}}
        @endif
    @endif

</div>
