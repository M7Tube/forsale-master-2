<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AppSettings::Create([
            'email' => 'test@gmail.com',
            'phone_number' => '+963999999999',
            'fax' => '+9639999999',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'instagram' => 'instagram',
            'wallet_defualt_balance' => 5000,
            'defualt_manger_accept' => 2,
            'defualt_golden_ad_count' => 1,
            'defualt_normal_ad_price' => 1000,
            'defualt_normal_ad_count' => 5,
            'defualt_golden_ad_price' => 5000,
        ]);
    }
}
