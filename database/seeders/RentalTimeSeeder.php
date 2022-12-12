<?php

namespace Database\Seeders;

use App\Models\RentalTime;
use Illuminate\Database\Seeder;

class RentalTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RentalTime::Create([
            'en_rent_name' => 'annual',
            'ar_rent_name' => 'سنوي',
        ]);

        RentalTime::Create([
            'en_rent_name' => 'Monthly',
            'ar_rent_name' => 'شهري',
        ]);

        RentalTime::Create([
            'en_rent_name' => 'weekly',
            'ar_rent_name' => 'أسبوعي',
        ]);

        RentalTime::Create([
            'en_rent_name' => 'daily',
            'ar_rent_name' => 'يومي',
        ]);
    }
}
