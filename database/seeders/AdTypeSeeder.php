<?php

namespace Database\Seeders;

use App\Models\AdType;
use Illuminate\Database\Seeder;

class AdTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdType::Create(['en_name' => 'Normal Ad', 'ar_name' => 'أعلان عادي', 'count' => 50, 'is_spcial' => 0, 'user_id' => 2]);
        AdType::Create(['en_name' => 'Spcial Ad', 'ar_name' => 'أعلان مميز', 'count' => 50, 'is_spcial' => 1, 'user_id' => 2]);
    }
}
