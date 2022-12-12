<?php

namespace Database\Seeders;

use App\Models\PersonLangueges;
use Illuminate\Database\Seeder;

class PersonLanguegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonLangueges::Create(['en_name' => 'English', 'ar_name' => 'أنكليزي']);
        PersonLangueges::Create(['en_name' => 'French', 'ar_name' => 'فرنسي']);
        PersonLangueges::Create(['en_name' => 'Arabic', 'ar_name' => 'عربي']);
        PersonLangueges::Create(['en_name' => 'Others', 'ar_name' => 'أخرى']);
    }
}
