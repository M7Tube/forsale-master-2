<?php

namespace Database\Seeders;

use App\Models\SpcialAd;
use Illuminate\Database\Seeder;

class SpcialAdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpcialAd::Create([
            'en_title' => 'Hamwi Coffie',
            'ar_title' => 'قهوة الحموي',
            'ar_desc' => 'شبيسشسيبيشسب',
            'is_golden' => 1,
            'duration' => 5,
            'picture' => 'cars.jpg',
            'user_id' => 1,
            'en_desc' => 'dsfadasfadsfdasf',
        ]);
        SpcialAd::Create([
            'en_title' => 'Hamwi Coffie22',
            'ar_title' => 'قهوة الحموي22',
            'ar_desc' => '22شبيسشسيبيشسب',
            'is_golden' => 2,
            'duration' => 5,
            'picture' => 'cars.jpg',
            'user_id' => 1,
            'en_desc' => '22dsfadasfadsfdasf',
        ]);
        SpcialAd::Create([
            'en_title' => 'Hamwi Coffie22',
            'ar_title' => 'قهوة الحموي33',
            'ar_desc' => '33شبيسشسيبيشسب',
            'is_golden' => 2,
            'duration' => 5,
            'picture' => 'cars.jpg',
            'user_id' => 1,
            'en_desc' => '33dsfadasfadsfdasf',
        ]);
    }
}
