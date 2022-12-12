<?php

namespace Database\Seeders;

use App\Models\CarStatus;
use Illuminate\Database\Seeder;

class CarStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarStatus::Create([
            'en_name' => 'New',
            'ar_name' => 'جديد',
        ]);
        CarStatus::Create([
            'en_name' => 'Used',
            'ar_name' => 'مستعمل',
        ]);
    }
}
