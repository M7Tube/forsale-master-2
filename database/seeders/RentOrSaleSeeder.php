<?php

namespace Database\Seeders;

use App\Models\RentOrSale;
use Illuminate\Database\Seeder;

class RentOrSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RentOrSale::Create([
            'en_name' => 'Sale - Buy',
            'ar_name' => 'بيع -شراء',
        ]);
        RentOrSale::Create([
            'en_name' => 'Rent',
            'ar_name' => 'أجار',
        ]);
    }
}
