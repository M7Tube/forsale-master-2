<!DOCTYPE html>
@if (app()->getLocale() == 'en')
    <html lang="{{ app()->getLocale() }}" dir="ltr">
@else
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@endif

<head>
    @livewireStyles

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
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/spcial.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @yield('head')

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

        /* .multiselect {
            width: 350px;
        } */

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkboxes {
            display: none;
            border: 1px #dadada solid;
        }

        #checkboxes label {
            display: block;
        }

        #checkboxes label:hover {
            background-color: #1e90ff;
        }

        #checkboxes2 {
            display: none;
            border: 1px #dadada solid;
        }

        #checkboxes2 label {
            display: block;
        }

        #checkboxes2 label:hover {
            background-color: #1e90ff;
        }
    </style>

    <title>@yield('title')</title>
</head>

<body style="background-color: #F2F2F2;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('website.homepage', app()->getLocale()) }}">
                <img src="{{ asset('upload/logo.png') }}" alt="logo" width="100" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (app()->getLocale() == 'en')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.changLang', app()->getLocale()) }}"><i
                                    class="bi bi-translate"></i> عربي <i class="bi bi-arrow-repeat"></i></a>
                        </li> |
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.changLang', app()->getLocale()) }}"><i
                                    class="bi bi-translate"></i> English <i class="bi bi-arrow-repeat"></i></a>
                        </li> |
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.homepage', app()->getLocale()) }}"><i
                                class="bi bi-house"></i> {{ __('Home Page') }}</a>
                    </li> |
                    @if (!session()->get('WebLoggedIn', []))
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('website.login', app()->getLocale()) }}><i
                                    class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}</a>
                        </li> |
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('website.register', app()->getLocale()) }}><i
                                    class="bi bi-person-plus"></i> {{ __('Register') }}</a>
                        </li> |
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i> {{ __('My Account') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('website.myads', app()->getLocale()) }}">{{ __('My Ads') }}
                                        <i class="bi bi-pencil-square"></i></a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('website.myFavorite', app()->getLocale()) }}">{{ __('My Favorite') }}
                                        <i class="bi bi-heart"></i></a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('website.add-new-ad', app()->getLocale()) }}">{{ __('Add New Ad') }}
                                        <i class="bi bi-plus-circle"></i></a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('website.my-wallet', app()->getLocale()) }}">{{ __('My Wallet') }}
                                        <i class="bi bi-wallet2"></i></a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('website.contact-with-manger', app()->getLocale()) }}">{{ __('Contact With Manger') }}
                                        <i class="bi bi-chat-square-text"></i></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                {{-- s --}}
                                <li><a class="dropdown-item"
                                        href={{ route('website.terms', app()->getLocale()) }}>{{ __('Terms and Conditions') }}
                                        <i class="bi bi-file-text"></i></a>
                                </li>
                                <li><a class="dropdown-item"
                                        href={{ route('website.logout', app()->getLocale()) }}>{{ __('Log Out') }}
                                        <i class="bi bi-box-arrow-left" style="color: red;"></i></a>
                                </li>
                            </ul>
                        </li> |
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('website.myads', app()->getLocale()) }}"><i
                                            class="bi bi-pencil-square"></i> {{ __('My Ads') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('website.myFavorite', app()->getLocale()) }}"><i
                                            class="bi bi-heart"></i> {{ __('My Favorite') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item"
                                        href={{ route('website.logout', app()->getLocale()) }}>{{ __('Log Out') }}</a>
                                </li>
                            </ul>
                        </li> --}}
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid my-3">
        <div class="col-12 col-md-12 col-sm-12">
            <form action="{{ route('website.search', app()->getLocale()) }}" class="d-flex">
                <input name="search" class="mx-1 form-control" type="search"
                    placeholder="{{ __('Search In Waseetcom Ads') }}" aria-label="Search"
                    value="{{ request()->query('search') }}">

                <select class="mx-1 form-control" name="language" id="">
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>عربي</option>
                </select>
                <button class="mx-1 btn btn-outline-success" type="submit">{{ __('Search') }}</button>
            </form>
        </div>
    </div>
    @yield('body')
    <div style="margin-bottom: 400px"></div>

    <footer class="text-center text-lg-start mt-5" style="background-color: #E8E8E8; color: #000; margin-top: 500px;">
        <section class="p-5">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>{{ __('Waseetco') }}
                        </h6>
                        <p>
                            <a class="text-dark"
                                href="{{ route('website.terms', app()->getLocale()) }}">{{ __('Terms And Conditions') }}</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            {{ __('Useful links') }}
                        </h6>

                        {{-- <p>
                            <a href="/public/{{ App::getLocale() }}/terms"
                                class="text-reset">{{ __('Settings') }}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{ __('Help') }}</a>
                        </p> --}}
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            {{ __('Contact') }}
                        </h6>
                        <p><i class="fas fa-home me-3"></i>{{ __('Syria') }}</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 11 111 11 11</p>
                        <p><i class="fas fa-print me-3"></i> + 11 111 11 11</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: #000; color: white;">
            {{ __('© 2021 Copyright:') }}
            <a class="text-reset fw-bold" href="#">Waseetcom.com</a>
        </div>
    </footer>
    @livewireScripts
    @yield('scripts')
    <script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script>
        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }

        var expanded2 = false;

        function showCheckboxes2() {
            var checkboxes2 = document.getElementById("checkboxes2");
            if (!expanded2) {
                checkboxes2.style.display = "block";
                expanded2 = true;
            } else {
                checkboxes2.style.display = "none";
                expanded2 = false;
            }
        }
    </script>
</body>

</html>
