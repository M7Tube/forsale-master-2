<?php

namespace Database\Seeders;

use App\Models\CommercialAndArtificialType;
use Illuminate\Database\Seeder;

class CommercialAndArtificialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommercialAndArtificialType::Create(['en_name' => 'Offices - Clinics', 'ar_name' => 'مكاتب - عيادات', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Shop', 'ar_name' => 'محل', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Exhibition', 'ar_name' => 'معرض', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Store', 'ar_name' => 'مستودع', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Hotel', 'ar_name' => 'فندق', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Restaurant - Cafe', 'ar_name' => 'مطعم - كافيه', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Institute', 'ar_name' => 'معهد', 'REMC_id' => 4]);
        CommercialAndArtificialType::Create(['en_name' => 'Others', 'ar_name' => 'أخرى', 'REMC_id' => 4]);
        //
        CommercialAndArtificialType::Create(['en_name' => 'Ground Floor', 'ar_name' => 'أرضي', 'REMC_id' => 5]);
        CommercialAndArtificialType::Create(['en_name' => 'Building', 'ar_name' => 'مبنى', 'REMC_id' => 5]);
        CommercialAndArtificialType::Create(['en_name' => 'Basement', 'ar_name' => 'أقبية', 'REMC_id' => 5]);
        CommercialAndArtificialType::Create(['en_name' => 'Others', 'ar_name' => 'أخرى', 'REMC_id' => 5]);
    }
}
