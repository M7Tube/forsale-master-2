<div class="my-2 col-xl-3 col-sm-6 col-12">
    <a href="@yield('href')" class="text-dark"
        style="text-decoration: none;">
        <div class="Scard card shadow-lg border-2 rounded-lg">
            <div class="card-content">
                <div class="card-body">
                    <div class="align-self-center">
                        @yield('pagetype')
                    </div>
                    <div class="media d-flex">
                        <div class="media-body text-right">
                            <h3>@yield('title')</h3>
                            <span>@yield('desc')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
