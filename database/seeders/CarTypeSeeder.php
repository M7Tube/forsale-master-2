<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarType::Create([
            'en_name' => 'BMW',
            'ar_name' => 'بي أم دبليو',
        ]);
        CarType::Create([
            'en_name' => 'Toyota',
            'ar_name' => 'تويوتا',
        ]);
    }
}
