<?php

namespace Database\Seeders;

use App\Models\AdStatus;
use Illuminate\Database\Seeder;

class AdStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdStatus::Create(['en_name' => 'Required', 'ar_name' => 'مطلوب']);
        AdStatus::Create(['en_name' => 'Displayed', 'ar_name' => 'معروض']);
    }
}
