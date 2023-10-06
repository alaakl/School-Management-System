<?php

use App\Models\My_Parent;
use App\Models\Nationalitie;
// use App\Models\Religion;
// use App\Models\Type_Blood;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my__parents')->delete();
            $my_parents = new My_Parent();

            $my_parents->email = 'parent@gmail.com';

            $my_parents->password = Hash::make('12345678');

            $my_parents->name = ['en' => 'amal', 'ar' => ' امل'];
            // $my_parents->National_ID_Father = '1234567810';
            // $my_parents->Passport_ID_Father = '1234567810';
            $my_parents->number_phone = '1234567810';

            $my_parents->relative_relation = 'mather';
            // $my_parents->Job_Father = ['en' => 'programmer', 'ar' => 'مبرمج'];
            $my_parents->Nationality_parents_id= Nationalitie::all()->unique()->random()->id;
            // $my_parents->Blood_Type_Father_id =Type_Blood::all()->unique()->random()->id;
            // $my_parents->Religion_Father_id = Religion::all()->unique()->random()->id;
            $my_parents->Address_parents ='دمشق';
            // $my_parents->Name_Mother = ['en' => 'SS', 'ar' => 'سس'];
            // $my_parents->National_ID_Mother = '1234567810';
            // $my_parents->Passport_ID_Mother = '1234567810';
            // $my_parents->Phone_Mother = '1234567810';
            // $my_parents->Job_Mother = ['en' => 'Teacher', 'ar' => 'معلمة'];
            // $my_parents->Nationality_Mother_id = Nationalitie::all()->unique()->random()->id;
            // $my_parents->Blood_Type_Mother_id =Type_Blood::all()->unique()->random()->id;
            // $my_parents->Religion_Mother_id = Religion::all()->unique()->random()->id;
            // $my_parents->Address_Mother ='القاهرة';
            $my_parents->save();


            $my_parents2 = new My_Parent();
            $my_parents2->email = 'parent2@gmail.com';
            $my_parents2->password = Hash::make('12345678');
            $my_parents2->name = ['en' => 'parent2', 'ar' => ' 2hpl]'];
            $my_parents2->number_phone = '1234567810';
            $my_parents2->relative_relation = 'Father';
            $my_parents2->Nationality_parents_id= Nationalitie::all()->unique()->random()->id;
            $my_parents2->Address_parents ='حلب';
            $my_parents2->save();

            $my_parents3 = new My_Parent();
            $my_parents3->email = 'parent3@gmail.com';
            $my_parents3->password = Hash::make('12345678');
            $my_parents3->name = ['en' => 'parent3', 'ar' => ' محمد'];
            $my_parents3->number_phone = '1234567810';
            $my_parents3->relative_relation = 'Father';
            $my_parents3->Nationality_parents_id= Nationalitie::all()->unique()->random()->id;
            $my_parents3->Address_parents ='حمص';
            $my_parents3->save();

            $my_parents = new My_Parent();
            $my_parents->email = 'parent4@gmail.com';
            $my_parents->password = Hash::make('12345678');
            $my_parents->name = ['en' => 'alaa4', 'ar' => ' 4علاء'];
            $my_parents->number_phone = '1234567810';
            $my_parents->relative_relation = 'Father';
            $my_parents->Nationality_parents_id= Nationalitie::all()->unique()->random()->id;
            $my_parents->Address_parents ='دمشق';
            $my_parents->save();
    }
}
