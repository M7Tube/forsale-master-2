<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::Create(
            [
                'ar_title' => 'تجربة',
                'en_title' => 'test',
                'ar_desc' => 'وصف التجربة',
                'en_desc' => 'test desc',
                'phone_number' => '0936865555',
                'manger_accept' => 2,
                'isPhone_visable' => 1,
                'qualification' => 'Collage',
                'age' => 22,
                'salary' => 342123,
                'work_hour' => 7,
                'extra_work_hour' => 2,
                'work_hour_rent' => 2222,
                'driving_license' => 1,
                'picture' => json_encode([
                    'cars.jpg',
                    '1.png',
                    '2.png',
                ]),
                'is_special' => 1,
                'watch_count' => 1,
                'user_id' => 2,
                'governorate_id' => 1,
                'area_id' => 1,
                'jobs_categorie_id' => 1,
                'lang_id' => 1,
                'YOE_id' => 1,
                'ad_type_id' => 1,
                'ad_statuse_id' => 1,
            ]
        );
        Jobs::Create(
            [
                'ar_title' => 'هيهيهيه',
                'en_title' => 'fdsa',
                'ar_desc' => 'وصف الهيهيهيهي',
                'en_desc' => 'test asdf',
                'phone_number' => '0936865555',
                'manger_accept' => 2,
                'isPhone_visable' => 1,
                'qualification' => 'Collage',
                'age' => 22,
                'salary' => 342123,
                'work_hour' => 7,
                'extra_work_hour' => 2,
                'work_hour_rent' => 2222,
                'driving_license' => 1,
                'picture' => json_encode([
                    '1.png',
                    '2.png',
                ]),
                'is_special' => 1,
                'watch_count' => 1,
                'user_id' => 2,
                'governorate_id' => 1,
                'area_id' => 1,
                'jobs_categorie_id' => 1,
                'lang_id' => 1,
                'YOE_id' => 1,
                'ad_type_id' => 1,
                'ad_statuse_id' => 1,
            ]
        );
        Jobs::Create(
            [
                'ar_title' => 'ضصثق',
                'en_title' => 'adsfewr',
                'ar_desc' => 'وثقضصضصثق',
                'en_desc' => 'werq',
                'phone_number' => '0936865555',
                'manger_accept' => 2,
                'isPhone_visable' => 1,
                'qualification' => 'Collage',
                'age' => 22,
                'salary' => 342123,
                'work_hour' => 7,
                'extra_work_hour' => 2,
                'work_hour_rent' => 2222,
                'driving_license' => 1,
                'picture' => json_encode([
                    '1.png',
                    'cars.jpg',
                    '2.png',
                ]),
                'is_special' => 1,
                'watch_count' => 1,
                'user_id' => 2,
                'governorate_id' => 1,
                'area_id' => 1,
                'jobs_categorie_id' => 1,
                'lang_id' => 1,
                'YOE_id' => 1,
                'ad_type_id' => 1,
                'ad_statuse_id' => 1,
            ]
        );
        Jobs::Create(
            [
                'ar_title' => 'فغخهعغ',
                'en_title' => 'trewtr',
                'ar_desc' => 'غه عهخ',
                'en_desc' => 'trewtewrtc',
                'phone_number' => '0936865555',
                'manger_accept' => 2,
                'isPhone_visable' => 1,
                'qualification' => 'Collage',
                'age' => 22,
                'salary' => 342123,
                'work_hour' => 7,
                'extra_work_hour' => 2,
                'work_hour_rent' => 2222,
                'driving_license' => 1,
                'picture' => json_encode([
                    '1.png',
                    'cars.jpg',
                ]),
                'is_special' => 1,
                'watch_count' => 1,
                'user_id' => 2,
                'governorate_id' => 1,
                'area_id' => 1,
                'jobs_categorie_id' => 1,
                'lang_id' => 1,
                'YOE_id' => 1,
                'ad_type_id' => 1,
                'ad_statuse_id' => 1,
            ]
        );
    }
}
