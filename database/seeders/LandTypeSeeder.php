<?php

namespace Database\Seeders;

use App\Models\LandType;
use Illuminate\Database\Seeder;

class LandTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandType::Create(['en_name' => 'Agricultural', 'ar_name' => 'زراعية']);
        LandType::Create(['en_name' => 'Industrial', 'ar_name' => 'صناعية']);
        LandType::Create(['en_name' => 'Ready To Build', 'ar_name' => 'معدة للبناء']);
        LandType::Create(['en_name' => 'Others', 'ar_name' => 'أخرى']);
    }
}
