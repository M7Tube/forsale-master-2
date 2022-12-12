<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::Create(['en_name' => 'Red', 'ar_name' => 'أحمر']);
        Color::Create(['en_name' => 'Green', 'ar_name' => 'أخضر']);
    }
}
