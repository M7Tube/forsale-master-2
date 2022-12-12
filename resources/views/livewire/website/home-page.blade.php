<div>
    <a href="{{ route('website.spcialAd', ['id' => $SpcialAd['spcial_ad_id'], app()->getLocale()]) }}">
        <div>
            <!-- ======= Hero Section ======= -->
            @if (file_exists(storage_path('app/img/' . $SpcialAd['picture'])))
                <div id="hero" class="hero route bg-image"
                    style="background-image: url('data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/img/' . $SpcialAd['picture']))) !!}'); width: 100%;
                                height: 50vw;
                                object-fit: fill;">
                @else
                    <div id="hero" class="hero route bg-image"
                        style="background-image: url('data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/img/defualt.png'))) !!}'); width: 100%;
                                height: 50vw;
                                object-fit: fill;">
            @endif
            {{-- <div class="overlay-itro"></div> --}}
        </div>
    </a>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <div class="col-12">
                                <a href="{{ route('website.contact-with-manger', app()->getLocale()) }}"
                                    style="text-decoration: none;">
                                    <div class="Scard card shadow-lg border-2 rounded-lg" style="border-radius: 15px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body text-dark text-left">
                                                        {{ __('Reserve your space here') }}

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="container my-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @forelse ($SpcialAdNG as $key => $ads)
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                        aria-label="Slide {{ $key }}"></button>
                @empty
                    {{ __('Empty') }}
                @endforelse
            </div>
            <div class="carousel-inner">
                @forelse ($SpcialAdNG as $key => $ads)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
                        <a href="{{ route('website.spcialAd', ['id' => $ads->spcial_ad_id, app()->getLocale()]) }}">
                            @if (file_exists('../storage/app/img/' . $ads['picture']))
                                <img class="d-block w-100"
                                    style="width: 100%;
                                height: 50vw;
                                object-fit: fill;"
                                    src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $ads['picture'])) !!}"
                                    alt="golden ad picture" />
                            @else
                                <img class="d-block w-100"
                                    style="width: 100%;
                                height: 50vw;
                                object-fit: fill;"
                                    src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                    alt="golden ad picture" />
                            @endif
                            <div class="carousel-caption d-md-block">
                                <h5 class="text-white">
                                    {{ app()->getLocale() == 'en' ? $ads->en_title ?? '' : $ads->ar_title ?? '' }}</h5>
                                <p class="text-white">
                                    {{ app()->getLocale() == 'en' ? $ads->en_desc ?? '' : $ads->ar_desc ?? '' }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    {{ __('Empty') }}
                @endforelse
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('Previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('Next') }}</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <div class="col-md-12">
                    <div class="form-floating">
                        <div class="col-12">
                            <div class="card-content">
                                <div class="card-body">
                                    <h5 class="mb-5">{{ __('Category') }}</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="{{ route('website.viewAds', [app()->getLocale(), 'category' => 1]) }}">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="{{ asset('img/cars.svg') }}"
                                                                        alt="icon" width="150px"><br />
                                                                    <span class="mt-3">{{ __('Cars') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="{{ route('website.viewAds', [app()->getLocale(), 'category' => 2]) }}">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="{{ asset('img/home.svg') }}"
                                                                        alt="icon" width="150px"><br />
                                                                    <span class="mt-3">{{ __('Real Estate') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="{{ route('website.viewAds', [app()->getLocale(), 'category' => 3]) }}">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="{{ asset('img/job.svg') }}"
                                                                        alt="icon" width="140px"><br />
                                                                    <span class="mt-3">{{ __('Jobs') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="text-dark" style="text-decoration: none;"
                                                href="{{ route('website.viewAds', [app()->getLocale(), 'category' => 4]) }}">
                                                <div class="Scard card shadow-lg border-2 rounded-lg mb-2"
                                                    style="border-radius: 15px;">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-center">
                                                                    <img src="{{ asset('img/mobile-screen-solid.svg') }}"
                                                                        alt="icon" width="100px"><br />
                                                                    <span class="mt-3">{{ __('Mobiles') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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
