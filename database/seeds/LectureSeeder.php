<?php

use App\Lecture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->delete();
        $lectures = [
            ['en'=> 'sciance', 'ar'=> 'علوم'],
            ['en'=> 'arebic', 'ar'=> ' عربي'],
            ['en'=> 'eneglesh', 'ar'=> ' انكليزي'],
            ['en'=> 'physic', 'ar'=> ' فيزياء'],
            ['en'=> 'chymic', 'ar'=> ' كيمياء'],

        ];




        foreach ($lectures as $aa) {
            Lecture::create([
            'Name' => $aa,
            ]);
        }
    }
}
