<?php

namespace Database\Seeders;

use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Neighborhood::Create(['en_name' => 'Gzmatia', 'ar_name' => 'جزماتية', 'governorate_id' => 1, 'area_id' => 1]);
        Neighborhood::Create(['en_name' => 'Dwar Kafarsusa', 'ar_name' => 'دوار كفرسوسة', 'governorate_id' => 1, 'area_id' => 2]);
        Neighborhood::Create(['en_name' => 'Dwar Missat', 'ar_name' => 'دوار الميسات', 'governorate_id' => 1, 'area_id' => 3]);
    }
}
