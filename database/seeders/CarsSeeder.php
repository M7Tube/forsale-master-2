<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cars::Create([
            'ar_title' => 'سبيشسسشبي',
            'en_title' => 'sdffds',
            'ar_desc' => 'بيسششيب',
            'en_desc' => 'sdafadsf',
            'phone_number' => '43211324',
            'manger_accept' => 2,
            'isPhone_visable' => 1,
            'price' => 1234,
            'picture' => json_encode([
                'cars.jpg',
                '1.png',
                '2.png',
            ]),
            'is_special' => 1,
            'watch_count' => 1,
            'manufacturing_year' => '1111',
            'kilometrag' => '1111',
            'car_type_id' => 1,
            'car_status_id' => 1,
            'ros_id' => 1,
            'motion_vector_id' => 1,
            'user_id' => 2,
            'cof_id' => 1,
            'continent_id' => 1,
            'rental_time_id' => 1,
            'color_id' => 1,
            'governorate_id' => 1,
            'ad_type_id' => 1,
            'ad_statuse_id' => 1,
        ]);
        Cars::Create([
            'ar_title' => 'علاعحهخهؤء',
            'en_title' => 'reqw',
            'ar_desc' => 'سيبعغ6ع',
            'en_desc' => 'ewqrsdf',
            'phone_number' => '43211324',
            'manger_accept' => 2,
            'isPhone_visable' => 1,
            'price' => 1234,
            'picture' => json_encode([
                'cars.jpg',
                '1.png',
                '2.png',
            ]),
            'is_special' => 1,
            'watch_count' => 1,
            'manufacturing_year' => '1111',
            'kilometrag' => '1111',
            'car_type_id' => 1,
            'car_status_id' => 2,
            'ros_id' => 2,
            'motion_vector_id' => 2,
            'user_id' => 2,
            'cof_id' =>2,
            'continent_id' => 2,
            'rental_time_id' => 2,
            'color_id' => 2,
            'governorate_id' => 1,
            'ad_type_id' => 1,
            'ad_statuse_id' => 1,
        ]);
        Cars::Create([
            'ar_title' => 'لالاةولاىة',
            'en_title' => 'wert',
            'ar_desc' => 'شيسبضضثص',
            'en_desc' => 'uyt',
            'phone_number' => '43211324',
            'manger_accept' => 2,
            'isPhone_visable' => 1,
            'price' => 1234,
            'picture' => json_encode([
                'cars.jpg',
                '1.png',
                '2.png',
            ]),
            'is_special' => 1,
            'watch_count' => 1,
            'manufacturing_year' => '1111',
            'kilometrag' => '1111',
            'car_type_id' => 2,
            'car_status_id' => 1,
            'ros_id' => 1,
            'motion_vector_id' => 1,
            'user_id' => 2,
            'cof_id' => 2,
            'continent_id' => 1,
            'rental_time_id' => 2,
            'color_id' => 2,
            'governorate_id' => 2,
            'ad_type_id' => 1,
            'ad_statuse_id' => 1,
        ]);
        Cars::Create([
            'ar_title' => 'قثصض',
            'en_title' => 'erterwt',
            'ar_desc' => 'اليب',
            'en_desc' => 'hgddg',
            'phone_number' => '43211324',
            'manger_accept' => 2,
            'isPhone_visable' => 1,
            'price' => 1234,
            'picture' => json_encode([
                'cars.jpg',
                '1.png',
                '2.png',
            ]),
            'is_special' => 1,
            'watch_count' => 1,
            'manufacturing_year' => '1111',
            'kilometrag' => '1111',
            'car_type_id' => 1,
            'car_status_id' => 1,
            'ros_id' => 1,
            'motion_vector_id' => 1,
            'user_id' => 2,
            'cof_id' => 1,
            'continent_id' => 1,
            'rental_time_id' => 1,
            'color_id' => 1,
            'governorate_id' => 1,
            'ad_type_id' => 1,
            'ad_statuse_id' => 1,
        ]);
    }
}
