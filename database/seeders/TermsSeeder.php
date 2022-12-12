<?php

namespace Database\Seeders;

use App\Models\Terms;
use Illuminate\Database\Seeder;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Terms::Create([
            'en_terms_conditions' => 'Here You Write The Terms And Conditions',
            'ar_terms_conditions' => 'هنا يتم كتابة شروط الأستخدام لتطبيق وسيطكم',
        ]);
    }
}
