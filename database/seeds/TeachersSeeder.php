<?php

use App\Models\Branche;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Specialization;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Type_Blood;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Node\Specificity;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        $teacher = new Teacher();
        $teacher->Name = ['ar' => ' معلم', 'en' => 'teacher '];
        $teacher->email  = 'teacher@gmail.com';
        $teacher->Joining_Date = '2022-08-19';
        $teacher->Address = 'sdvetrty';
        $teacher->password = Hash::make('12345678');
        // $teacher->phone_number = '12345678';
        $teacher->gender_id = Gender::all()->unique()->random()->id;
        // $teacher->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        $teacher->Specialization_id = Specialization::all()->unique()->random()->id;
        $teacher->save();


        $teacher2 = new Teacher();
        $teacher2->Name = ['ar' => ' 2معلم', 'en' => 'teacher2 '];
        $teacher2->email  = 'teacher2@gmail.com';
        $teacher2->Joining_Date = '2022-08-19';
        $teacher2->Address = 'sdvetrty';
        $teacher2->password = Hash::make('12345678');
        // $teacher2->phone_number = '12345678';
        $teacher2->gender_id = Gender::all()->unique()->random()->id;
        // $teacher2->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        $teacher2->Specialization_id = Specialization::all()->unique()->random()->id;
        $teacher2->save();


        $teacher3 = new Teacher();
        $teacher3->Name = ['ar' => ' 3معلم', 'en' => 'teacher3 '];
        $teacher3->email  = 'teacher3@gmail.com';
        $teacher3->Joining_Date = '2022-08-19';
        $teacher3->Address = 'sdvetrty';
        $teacher3->password = Hash::make('12345678');
        // $teacher3->phone_number = '12345678';
        $teacher3->gender_id = Gender::all()->unique()->random()->id;
        // $teacher3->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        $teacher3->Specialization_id = Specialization::all()->unique()->random()->id;
        $teacher3->save();

    }
}
