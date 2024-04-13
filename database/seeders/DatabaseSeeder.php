<?php

namespace Database\Seeders;

use Database\Factories\RolesAndPermissions;
use Illuminate\Database\Seeder;
use RolesAndPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AcademicSettingSeeder::class,
            PermissionSeeder::class,
            SchoolSessionSeeder::class,
            SchoolClassSeeder::class,
            SectionSeeder::class,
            SemesterSeeder::class,
            CourseSeeder::class,
            UserSeeder::class,
            AssignedTeacherSeeder::class,
            PromotionSeeder::class,
            StudentParentInfoSeeder::class,
            StudentAcademicInfoSeeder::class,
        ]);
    }
}
