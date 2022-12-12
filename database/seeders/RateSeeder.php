<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::Create(['reason' => 'test', 'rate_from_5' => 4, 'category' => 1, 'user_id' => 1, 'ad_id' => 1]);
        Rate::Create(['reason' => 'test2', 'rate_from_5' => 3, 'category' => 2, 'user_id' => 1, 'ad_id' => 1]);
        Rate::Create(['reason' => 'test3', 'rate_from_5' => 5, 'category' => 3, 'user_id' => 1, 'ad_id' => 1]);
    }
}
