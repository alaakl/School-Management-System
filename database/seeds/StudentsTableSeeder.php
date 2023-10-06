<?php

use App\Models\Branche;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\Type_Blood;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        $students = new Student();
        $students->name = ['ar' => ' علاء', 'en' => ' alaa'];
        $students->email = '_alaa@yahoo.com';
        $students->password = Hash::make('12345678');
        $students->phone_number = '12345678';
        $students->gender_id = Gender::all()->unique()->random()->id;;
        $students->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        // $students->blood_id =Type_Blood::all()->unique()->random()->id;
        $students->Date_Birth = date('1995-01-01');
        $students->Grade_id = Grade::all()->unique()->random()->id;
        $students->Classroom_id =Classroom::all()->unique()->random()->id;
        $students->section_id = Section::all()->unique()->random()->id;
        $students->branche_id = Branche::all()->unique()->random()->id;
        $students->parent_id = My_Parent::all()->unique()->random()->id;
        $students->academic_year ='2021';
        $students->save();


        $students_2 = new Student();
        $students_2->name = ['ar' => ' علاء2', 'en' => ' alaa2'];
        $students_2->email = '_alaa2@yahoo.com';
        $students_2->password = Hash::make('12345678');
        $students_2->phone_number = '12345678';
        $students_2->gender_id = Gender::all()->unique()->random()->id;;
        $students_2->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        // $students->blood_id =Type_Blood::all()->unique()->random()->id;
        $students_2->Date_Birth = date('1995-01-01');
        $students_2->Grade_id = Grade::all()->unique()->random()->id;
        $students_2->Classroom_id =Classroom::all()->unique()->random()->id;
        $students_2->section_id = Section::all()->unique()->random()->id;
        $students_2->branche_id = Branche::all()->unique()->random()->id;
        $students_2->parent_id = My_Parent::all()->unique()->random()->id;
        $students_2->academic_year ='2021';
        $students_2->save();


        $students_2 = new Student();
        $students_2->name = ['ar' => ' علا32', 'en' => ' alaa3'];
        $students_2->email = '_alaa3@yahoo.com';
        $students_2->password = Hash::make('12345678');
        $students_2->phone_number = '12345678';
        $students_2->gender_id = Gender::all()->unique()->random()->id;;
        $students_2->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        // $students->blood_id =Type_Blood::all()->unique()->random()->id;
        $students_2->Date_Birth = date('1995-01-01');
        $students_2->Grade_id = Grade::all()->unique()->random()->id;
        $students_2->Classroom_id =Classroom::all()->unique()->random()->id;
        $students_2->section_id = Section::all()->unique()->random()->id;
        $students_2->branche_id = Branche::all()->unique()->random()->id;
        $students_2->parent_id = My_Parent::all()->unique()->random()->id;
        $students_2->academic_year ='2021';
        $students_2->save();
    }
}
