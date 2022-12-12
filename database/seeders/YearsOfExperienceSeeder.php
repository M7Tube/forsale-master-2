<?php

namespace Database\Seeders;

use App\Models\YearsOfExperience;
use Illuminate\Database\Seeder;

class YearsOfExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YearsOfExperience::Create(['en_name' => 'Junior', 'ar_name' => 'مبتدئ']);
        YearsOfExperience::Create(['en_name' => '1 -> 2 Year', 'ar_name' => '1 -> 2 سنة']);
        YearsOfExperience::Create(['en_name' => '3 -> 5 Years', 'ar_name' => '3 -> 5 سنوات']);
        YearsOfExperience::Create(['en_name' => '6 -> 10 Years', 'ar_name' => '6 -> 10 سنوات']);
        YearsOfExperience::Create(['en_name' => '+11 Year', 'ar_name' => '+11 سنة']);
    }
}
