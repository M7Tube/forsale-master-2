<?php

namespace Database\Seeders;

use App\Models\RealEstateMainCategory;
use Illuminate\Database\Seeder;

class RealEstateMainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealEstateMainCategory::Create(['en_name' => 'Lands', 'ar_name' => 'أراضي']);
        RealEstateMainCategory::Create(['en_name' => 'Villas - Farms', 'ar_name' => 'فلل - مزارع']);
        RealEstateMainCategory::Create(['en_name' => 'Apartments', 'ar_name' => 'شقق']);
        RealEstateMainCategory::Create(['en_name' => 'Commercial', 'ar_name' => 'تجاري']);
        RealEstateMainCategory::Create(['en_name' => 'Industrial', 'ar_name' => 'صناعي']);
    }
}
