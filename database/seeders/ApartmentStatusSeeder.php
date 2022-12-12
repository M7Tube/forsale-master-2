<?php

namespace Database\Seeders;

use App\Models\ApartmentStatus;
use Illuminate\Database\Seeder;

class ApartmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApartmentStatus::Create(['en_name' => 'Old-textured Apartment', 'ar_name' => 'كسوة قديمة']);
        ApartmentStatus::Create(['en_name' => 'Middle-textured Apartment', 'ar_name' => 'كسوة وسط']);
        ApartmentStatus::Create(['en_name' => 'Good-textured Apartment', 'ar_name' => 'كسوة جيدة']);
        ApartmentStatus::Create(['en_name' => 'Non-textured Apartment', 'ar_name' => 'غير مكسي']);
        ApartmentStatus::Create(['en_name' => 'Delux Apartment', 'ar_name' => 'ديلوكس']);
        ApartmentStatus::Create(['en_name' => 'Others', 'ar_name' => 'أخرى']);
    }
}
