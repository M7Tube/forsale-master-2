<?php

namespace Database\Seeders;

use App\Models\CountryOfManufacture;
use Illuminate\Database\Seeder;

class CountryOfManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountryOfManufacture::Create(['ar_name' => 'سوريا', 'en_name' => 'Syria']);
        CountryOfManufacture::Create(['ar_name' => 'لبنان', 'en_name' => 'Lebanon']);
    }
}
