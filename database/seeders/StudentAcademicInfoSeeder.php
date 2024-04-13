<?php

namespace Database\Seeders;

use App\Models\StudentAcademicInfo;
use Illuminate\Database\Seeder;

class StudentAcademicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentAcademicInfo::factory()->create();
    }
}
