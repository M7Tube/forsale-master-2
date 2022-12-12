<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::Create(['en_name' => 'Midan', 'ar_name' => 'ميدان', 'governorate_id' => 1]);
        Area::Create(['en_name' => 'Kafarsusa', 'ar_name' => 'كفرسوسة', 'governorate_id' => 1]);
        Area::Create(['en_name' => 'Missat', 'ar_name' => 'الميسات', 'governorate_id' => 1]);
    }
}
