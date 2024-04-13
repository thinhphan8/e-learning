<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //student
        $user = User::factory()->student()->create();
        $permissions = Permission::whereIn('name', [
            'view attendances',
            'view assignments',
            'submit assignments',
            'view exams',
            'view marks',
            'view users',
            'view routines',
            'view syllabi',
            'view events',
            'view notices',
        ])->get();
        $user->givePermissionTo($permissions);

        //teacher
        $user = User::factory()->teacher()->create();
        $permissions = Permission::whereIn('name', [
            'create exams',
            'view exams',
            'create exams rule',
            'view exams rule',
            'edit exams rule',
            'delete exams rule',
            'take attendances',
            'view attendances',
            'create assignments',
            'view assignments',
            'save marks',
            'view users',
            'view routines',
            'view syllabi',
            'view events',
            'view notices',
        ])->get();
        $user->givePermissionTo($permissions);
    }
}
