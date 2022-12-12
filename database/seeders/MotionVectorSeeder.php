<?php

namespace Database\Seeders;

use App\Models\MotionVector;
use Illuminate\Database\Seeder;

class MotionVectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotionVector::Create(['en_name' => 'Automatic', 'ar_name' => 'أوتوماتيك']);
        MotionVector::Create(['en_name' => 'Normal', 'ar_name' => 'عادي']);
    }
}
