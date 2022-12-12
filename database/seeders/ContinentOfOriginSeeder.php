<?php

namespace Database\Seeders;

use App\Models\ContinentOfOrigin;
use Illuminate\Database\Seeder;

class ContinentOfOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContinentOfOrigin::Create([
            'en_name' => 'Europe',
            'ar_name' => 'أوروبا',
        ]);
        ContinentOfOrigin::Create([
            'en_name' => 'America',
            'ar_name' => 'أمريكا',
        ]);
        ContinentOfOrigin::Create([
            'en_name' => 'Asia',
            'ar_name' => 'أسيا',
        ]);
    }
}
