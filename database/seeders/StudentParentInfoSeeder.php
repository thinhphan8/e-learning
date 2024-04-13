<?php

namespace Database\Seeders;

use App\Models\StudentParentInfo;
use Illuminate\Database\Seeder;

class StudentParentInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentParentInfo::factory()->create();
    }
}
