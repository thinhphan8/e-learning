<?php

namespace Database\Seeders;

use App\Models\AssignedTeacher;
use Illuminate\Database\Seeder;

class AssignedTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AssignedTeacher::factory()->create();
    }
}
