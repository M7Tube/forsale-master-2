<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Governorate::Create([
            'en_name' => 'Damscuse',
            'ar_name' => 'دمشق',
        ]);
        Governorate::Create([
            'en_name' => 'Tartus',
            'ar_name' => 'طرطوس',
        ]);
    }
}
