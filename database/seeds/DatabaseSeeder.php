<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SpecializationsTableSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        // $this->call(BloodTableSeeder::class);
        // $this->call(religionTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(branchesSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
