<?php

namespace Database\Seeders;

use App\Models\JobsCategory;
use Illuminate\Database\Seeder;

class JobsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobsCategory::Create(['en_name' => 'Technical', 'ar_name' => 'فني']);
        JobsCategory::Create(['en_name' => 'Sales', 'ar_name' => 'مبيعات']);
        JobsCategory::Create(['en_name' => 'Secretarial', 'ar_name' => 'سكرتارية']);
        JobsCategory::Create(['en_name' => 'Administrative', 'ar_name' => 'اداري']);
        JobsCategory::Create(['en_name' => 'Technology', 'ar_name' => 'تكنولوجيا']);
        JobsCategory::Create(['en_name' => 'Drivers', 'ar_name' => 'سائقين']);
        JobsCategory::Create(['en_name' => 'Law + Lawyer', 'ar_name' => 'قانون + محاماة']);
        JobsCategory::Create(['en_name' => 'Teaching', 'ar_name' => 'تدريس']);
        JobsCategory::Create(['en_name' => 'Care', 'ar_name' => 'رعاية']);
        JobsCategory::Create(['en_name' => 'Hotel', 'ar_name' => 'فندقي']);
        JobsCategory::Create(['en_name' => 'Beauty', 'ar_name' => 'جمال']);
        JobsCategory::Create(['en_name' => 'Others', 'ar_name' => 'أخرى']);
    }
}
