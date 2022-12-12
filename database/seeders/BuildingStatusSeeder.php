<?php

namespace Database\Seeders;

use App\Models\BuildingStatus;
use Illuminate\Database\Seeder;

class BuildingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuildingStatus::Create(['en_name' => 'Non-textured Building', 'ar_name' => 'غير مكسي']);
        BuildingStatus::Create(['en_name' => 'OutSide-textured Building', 'ar_name' => 'أكساء خارجي']);
        BuildingStatus::Create(['en_name' => 'Fully inhabited Building', 'ar_name' => 'مسكونة بالكامل']);
        BuildingStatus::Create(['en_name' => 'Others', 'ar_name' => 'أخرى']);
    }
}
