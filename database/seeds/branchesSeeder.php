<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Branche;
use App\Models\Classroom;
use App\Models\Grade;


class branchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->delete();
        $classrooms = [
            ['en'=> 'First branche', 'ar'=> 'الشعبة الاولى'],
            ['en'=> 'Second branche', 'ar'=> 'الشعبة الثانية'],
            ['en'=> 'Third branche', 'ar'=> 'الشعبة الثالثة'],
            ['en'=> 'fourth branche', 'ar'=> 'الشعبة الرابعة'],
        ];

        foreach ($classrooms as $classroom) {
            Branche::create([
            'Name' => $classroom,
            'Status' => 1,
            'Class_id' => Classroom::all()->unique()->random()->id,
            'Grade_id' => Grade::all()->unique()->random()->id
            ]);
        }
    }
}
