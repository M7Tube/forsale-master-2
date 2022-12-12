<div class="container-fluid">
    <!-- Begin Of Create Pages Card -->
    <h4 class="text-center mt-4"><?php echo e(__('Waseetcom Dashboard')); ?></h4>
    <div class="row">
        
        <div class="my-2 col-12">
            <a href="<?php echo e(auth()->user()->canany('read_app_settings') == false? '': route('web.crud.Statistics', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany('read_app_settings') == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Statistics')); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="my-2 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_app_settings','edit_app_settings','create_app_settings']) == false? '': route('web.crud.AppSettings', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_app_settings','edit_app_settings','create_app_settings']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('App Settings')); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? '': route('web.crud.Users', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Admin Users')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? '': route('web.crud.WebAppPersonalUsers', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Web/App Personal Users')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? '': route('web.crud.WebAppCommercialUsers', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_users', 'edit_users', 'delete_users']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Web/App Commercial Users')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_color', 'create_color', 'edit_color', 'delete_color']) == false? '': route('web.crud.Color', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_color', 'create_color', 'edit_color', 'delete_color']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Colors')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['edit_real_estate', 'edit_jobs', 'edit_cars']) == false? '': route('web.crud.AcceptAds', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['edit_real_estate', 'edit_jobs', 'edit_cars']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      <?php echo e($adsNeedApprovalCount); ?>

                                      <span class="visually-hidden">unread messages</span>
                                    </span>

                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Ads Need Approval')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_continent_of_origin',
                    'create_continent_of_origin',
                    'edit_continent_of_origin',
                    'delete_continent_of_origin',
                ]) == false
                ? ''
                : route('web.crud.ContinentOfOrigin', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_continent_of_origin',
                            'create_continent_of_origin',
                            'edit_continent_of_origin',
                            'delete_continent_of_origin',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Region Of Origin')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_neighborhood', 'create_neighborhood', 'edit_neighborhood', 'delete_neighborhood']) == false? '': route('web.crud.neighborhood', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_neighborhood', 'create_neighborhood', 'edit_neighborhood', 'delete_neighborhood']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Neighborhoods')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_area', 'create_area', 'edit_area', 'delete_area']) == false? '': route('web.crud.areas', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_area', 'create_area', 'edit_area', 'delete_area']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Areas')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_governorate', 'create_governorate', 'edit_governorate', 'delete_governorate']) == false? '': route('web.crud.Governorates', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_governorate', 'create_governorate', 'edit_governorate', 'delete_governorate']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Governorates')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12 ">
            <a href="<?php echo e(auth()->user()->canany(['read_spcialAd', 'create_spcialAd', 'edit_spcialAd', 'delete_spcialAd']) == false? '': route('web.crud.SpcialAd', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_spcialAd', 'create_spcialAd', 'edit_spcialAd', 'delete_spcialAd']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Admin Ads')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_rental_time', 'create_rental_time', 'edit_rental_time', 'delete_rental_time']) == false? '': route('web.crud.RentalTime', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_rental_time', 'create_rental_time', 'edit_rental_time', 'delete_rental_time']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Rental Time')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_country_of_manufacture',
                    'create_country_of_manufacture',
                    'edit_country_of_manufacture',
                    'delete_country_of_manufacture',
                ]) == false
                ? ''
                : route('web.crud.CountryOfManufacture', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_country_of_manufacture',
                            'create_country_of_manufacture',
                            'edit_country_of_manufacture',
                            'delete_country_of_manufacture',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Country Of Manufacture')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_wallet', 'create_wallet', 'edit_wallet', 'delete_wallet']) == false? '': route('web.crud.wallets', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_wallet', 'create_wallet', 'edit_wallet', 'delete_wallet']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Wallet')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_motion_vector', 'create_motion_vector', 'edit_motion_vector', 'delete_motion_vector']) == false? '': route('web.crud.MotionVector', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_motion_vector', 'create_motion_vector', 'edit_motion_vector', 'delete_motion_vector']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Transmision Vector')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_jobs', 'create_jobs', 'edit_jobs', 'delete_jobs']) == false? '': route('web.crud.Jobs', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_jobs', 'create_jobs', 'edit_jobs', 'delete_jobs']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Jobs')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_cars', 'create_cars', 'edit_cars', 'delete_cars']) == false? '': route('web.crud.Cars', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_cars', 'create_cars', 'edit_cars', 'delete_cars']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Cars')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_years_of_experience',
                    'create_years_of_experience',
                    'edit_years_of_experience',
                    'delete_years_of_experience',
                ]) == false
                ? ''
                : route('web.crud.YearsOfExperience', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_years_of_experience',
                            'create_years_of_experience',
                            'edit_years_of_experience',
                            'delete_years_of_experience',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Years Of Experience')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_ad_status', 'create_ad_status', 'edit_ad_status', 'delete_ad_status']) == false? '': route('web.crud.AdStatus', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_ad_status', 'create_ad_status', 'edit_ad_status', 'delete_ad_status']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Ad Status')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_apartment_status',
                    'create_apartment_status',
                    'edit_apartment_status',
                    'delete_apartment_status',
                ]) == false
                ? ''
                : route('web.crud.ApartmentStatus', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_apartment_status',
                            'create_apartment_status',
                            'edit_apartment_status',
                            'delete_apartment_status',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Apartment Status')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_person_langueges',
                    'create_person_langueges',
                    'edit_person_langueges',
                    'delete_person_langueges',
                ]) == false
                ? ''
                : route('web.crud.PersonLangueges', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_person_langueges',
                            'create_person_langueges',
                            'edit_person_langueges',
                            'delete_person_langueges',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Person Langueges')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_buildingStatus', 'create_buildingStatus', 'edit_buildingStatus', 'delete_buildingStatus']) == false? '': route('web.crud.BuildingStatus', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_buildingStatus', 'create_buildingStatus', 'edit_buildingStatus', 'delete_buildingStatus']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Building Status')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_car_status', 'create_car_status', 'edit_car_status', 'delete_car_status']) == false? '': route('web.crud.CarStatus', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_car_status', 'create_car_status', 'edit_car_status', 'delete_car_status']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Car Status')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany(['read_car_type', 'create_car_type', 'edit_car_type', 'delete_car_type']) == false? '': route('web.crud.CarType', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany(['read_car_type', 'create_car_type', 'edit_car_type', 'delete_car_type']) == false? 'opacity-50': 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Car Type')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
        <div class="my-2 col-xl-4 col-sm-6 col-12">
            <a href="<?php echo e(auth()->user()->canany([
                    'read_commercial_and_artificial_type',
                    'create_commercial_and_artificial_type',
                    'edit_commercial_and_artificial_type',
                    'delete_commercial_and_artificial_type',
                ]) == false
                ? ''
                : route('web.crud.CommercialAndArtificialType', app()->getLocale())); ?>"
                class="text-dark" style="text-decoration: none;">
                <div
                    class="<?php echo e(auth()->user()->canany([
                            'read_commercial_and_artificial_type',
                            'create_commercial_and_artificial_type',
                            'edit_commercial_and_artificial_type',
                            'delete_commercial_and_artificial_type',
                        ]) == false
                        ? 'opacity-50'
                        : 'Scard'); ?> card shadow-lg border-2 rounded-lg">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="align-self-center">
                                <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                            </div>
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h5><?php echo e(__('Commercial And Artificial Type')); ?></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\forsale-master\forsale-master\resources\views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>