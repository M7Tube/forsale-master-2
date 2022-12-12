<?php

namespace Database\Seeders;

use App\Models\Favorite;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Favorite::Create(['user_id' => 1, 'car_id' => 1, 'real_estate_id' => 0, 'job_id' => 0, 'mobile_id' => 0]);
        Favorite::Create(['user_id' => 1, 'car_id' => 0, 'real_estate_id' => 1, 'job_id' => 0, 'mobile_id' => 0]);
        Favorite::Create(['user_id' => 1, 'car_id' => 0, 'real_estate_id' => 0, 'job_id' => 1, 'mobile_id' => 0]);
    }
}
