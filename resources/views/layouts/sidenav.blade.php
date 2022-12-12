<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/aaa.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <style>
        :root {
            touch-action: pan-x pan-y;
            height: 100%
        }

        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
        }

        .Scard {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .Scard:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
    <title>{{ __('Dashboard') }}</title>
    @livewireStyles

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style copy.css') }}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-color: gray;">
                <div class="user-logo">
                    {{-- <div class="img" style="background-image: url(/images/logo.png);"></div> --}}
                    <h6>
                        {{ auth()->user()['email'] }}</h6>
                    <h6>
                        {{ auth()->user()['phone_number'] }}</h6>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                @if (app()->getLocale() == 'en')
                    @if (request()->id)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route(Route::currentRouteName(), 'ar') }}/?id={{ request()->id }}"><i
                                    class="bi bi-translate"></i> {{ __('Change To Arabic') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route(Route::currentRouteName(), 'ar') }}"><i
                                    class="bi bi-translate"></i> {{ __('Change To Arabic') }}</a>
                        </li>
                    @endif
                @else
                    @if (request()->id)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route(Route::currentRouteName(), 'en') }}/?id={{ request()->id }}"><i
                                    class="bi bi-translate"></i> {{ __('Change To English') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route(Route::currentRouteName(), 'en') }}"><i
                                    class="bi bi-translate"></i> {{ __('Change To English') }}</a>
                        </li>
                    @endif
                @endif
                {{-- <li class="active">
                    <a href="{{ route('web.crud.Users', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Users') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.Color', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Colors') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.ContinentOfOrigin', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Continent Of Origin') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.governorates', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Governorates') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.areas', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Areas') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.neighborhood', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Neighborhoods') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.spcialAds', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Spcial Ads') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.wallets', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Wallet') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.MotionVector', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Motion Vector') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.manufacturingYear', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Manufacturing Year') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.CountryOfManufacture', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Country Of Manufacture') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.RentalTime', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Rental Time') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.Jobs', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Jobs') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.YearsOfExperience', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Years Of Experience') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.AdStatus', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Ad Status') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.PersonLangueges', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Person Langueges') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.ApartmentStatus', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Apartment Status') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.BuildingStatus', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Building Status') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.CarStatus', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Car Status') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.CarType', app()->getLocale()) }}"><i class="bi bi-menu-button"></i>
                        {{ __('Car Type') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.CommercialAndArtificialType', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Commercial And Artificial Type') }}</a>
                </li>
                <li class="">
                    <a href="{{ route('web.crud.sendGeneralNoti', app()->getLocale()) }}"><i
                            class="bi bi-menu-button"></i>
                        {{ __('Send General Notification') }}</a>
                </li> --}}
                @if (auth()->user()->can('create_users'))
                    <li class="">
                        <a href="{{ route('register', app()->getLocale()) }}"><i class="bi bi-person-plus-fill"></i>
                            {{ __('Create New Account') }}</a>
                    </li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout', app()->getLocale()) }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="bi bi-box-arrow-left"></i> {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        @yield('content')
    </div>

    <script src={{ asset('js2/jquery.min.js') }}></script>
    <script src={{ asset('js2/popper.js') }}></script>
    <script src={{ asset('js2/bootstrap.min.js') }}></script>
    <script src={{ asset('js2/main.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    @livewireScripts
</body>

</html>
