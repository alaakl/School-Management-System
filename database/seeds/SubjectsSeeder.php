<?php

use Illuminate\Database\Seeder;
use App\Models\Branche;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Type_Blood;
// use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $subjects = [
            ['en'=> 'sciance', 'ar'=> 'علوم'],
            ['en'=> 'arebic', 'ar'=> ' عربي'],
            ['en'=> 'eneglesh', 'ar'=> ' انكليزي'],
            ['en'=> 'physic', 'ar'=> ' فيزياء'],
            ['en'=> 'chymic', 'ar'=> ' كيمياء'],
        ];

        foreach ($subjects as $subject) {
            Subject::create([
            'name' =>  $subject,
            'classroom_id' => Classroom::all()->unique()->random()->id,
            'Grade_id' => Grade::all()->unique()->random()->id,
            'teacher_id' => Teacher::all()->unique()->random()->id,
            ]);
        }
    }
}
