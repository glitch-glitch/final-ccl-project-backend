<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\CollegeSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\ClassroomSeeder;
use Database\Seeders\BatchSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\BatchTeacherSubjectSeeder;
use Database\Seeders\Permissions\SpecialActivitySeeder;
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
            RoleSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            CollegeSeeder::class,
            DepartmentSeeder::class,
            ClassroomSeeder::class,
            BatchSeeder::class,
            SubjectSeeder::class,
            BatchTeacherSubjectSeeder::class,
            // SpecialActivitySeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
