<?php

namespace App\Http\Traits;

trait PermissionsTrait
{
    public function getPermissions()
    {
        return [
            'wallet',
            'users',
            'spcialAd',
            'rental_time',
            'jobs',
            'ad_type',
            'apartment_status',
            'app_settings',
            'area',
            'buildingStatus',
            'cars',
            'car_status',
            'car_type',
            'color',
            'commercial_and_artificial_type',
            'continent_of_origin',
            'country_of_manufacture',
            'favorite',
            'governorate',
            'jobs_category',
            'land_type',
            'manufacturing_year',
            'motion_vector',
            'neighborhood',
            'person_langueges',
            'real_estate',
            'real_estate_main_category',
            'terms',
            'years_of_experience',
            'ad_status',
        ];
    }
}
