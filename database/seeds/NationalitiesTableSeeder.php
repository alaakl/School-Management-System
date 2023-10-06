<?php

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Ivory Coastian',
                'ar'=> 'ساحل العاج'
            ],
            [

                'en'=> 'Jersian',
                'ar'=> 'جيرزي'
            ],
            [

                'en'=> 'Jamaican',
                'ar'=> 'جمايكي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kazakh',
                'ar'=> 'كازاخستاني'
            ],
            [

                'en'=> 'Kenyan',
                'ar'=> 'كيني'
            ],
            [

                'en'=> 'I-Kiribati',
                'ar'=> 'كيريباتي'
            ],
            [

                'en'=> 'North Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'South Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Kosovar',
                'ar'=> 'كوسيفي'
            ],
            [

                'en'=> 'Kuwaiti',
                'ar'=> 'كويتي'
            ],
            [

                'en'=> 'Kyrgyzstani',
                'ar'=> 'قيرغيزستاني'
            ],
            [

                'en'=> 'Laotian',
                'ar'=> 'لاوسي'
            ],
            [

                'en'=> 'Latvian',
                'ar'=> 'لاتيفي'
            ],
            [

                'en'=> 'Lebanese',
                'ar'=> 'لبناني'
            ],
            [

                'en'=> 'Basotho',
                'ar'=> 'ليوسيتي'
            ],
            [

                'en'=> 'Liberian',
                'ar'=> 'ليبيري'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],
            [

                'en'=> 'Liechtenstein',
                'ar'=> 'ليختنشتيني'
            ],
            [

                'en'=> 'Lithuanian',
                'ar'=> 'لتوانيي'
            ],
            [

                'en'=> 'Luxembourger',
                'ar'=> 'لوكسمبورغي'
            ],
            [

                'en'=> 'Sri Lankian',
                'ar'=> 'سريلانكي'
            ],
            [

                'en'=> 'Macanese',
                'ar'=> 'ماكاوي'
            ],
            [

                'en'=> 'Macedonian',
                'ar'=> 'مقدوني'
            ],
            [

                'en'=> 'Malagasy',
                'ar'=> 'مدغشقري'
            ],
            [

                'en'=> 'Malawian',
                'ar'=> 'مالاوي'
            ],
            [

                'en'=> 'Malaysian',
                'ar'=> 'ماليزي'
            ],
            [

                'en'=> 'Maldivian',
                'ar'=> 'مالديفي'
            ],
            [

                'en'=> 'Malian',
                'ar'=> 'مالي'
            ],
            [

                'en'=> 'Maltese',
                'ar'=> 'مالطي'
            ],
            [

                'en'=> 'Marshallese',
                'ar'=> 'مارشالي'
            ],
            [

                'en'=> 'Martiniquais',
                'ar'=> 'مارتينيكي'
            ],
            [

                'en'=> 'Mauritanian',
                'ar'=> 'موريتانيي'
            ],
            [

                'en'=> 'Mauritian',
                'ar'=> 'موريشيوسي'
            ],
            [

                'en'=> 'Mahoran',
                'ar'=> 'مايوتي'
            ],
            [

                'en'=> 'Mexican',
                'ar'=> 'مكسيكي'
            ],
            [

                'en'=> 'Micronesian',
                'ar'=> 'مايكرونيزيي'
            ],
            [

                'en'=> 'Moldovan',
                'ar'=> 'مولديفي'
            ],
            [

                'en'=> 'Monacan',
                'ar'=> 'مونيكي'
            ],
            [

                'en'=> 'Mongolian',
                'ar'=> 'منغولي'
            ],
            [

                'en'=> 'Montenegrin',
                'ar'=> 'الجبل الأسود'
            ],
            [

                'en'=> 'Montserratian',
                'ar'=> 'مونتسيراتي'
            ],
            [

                'en'=> 'Moroccan',
                'ar'=> 'مغربي'
            ],
            [

                'en'=> 'Mozambican',
                'ar'=> 'موزمبيقي'
            ],
            [

                'en'=> 'Myanmarian',
                'ar'=> 'ميانماري'
            ],
            [

                'en'=> 'Namibian',
                'ar'=> 'ناميبي'
            ],
            [

                'en'=> 'Nauruan',
                'ar'=> 'نوري'
            ],
            [

                'en'=> 'Nepalese',
                'ar'=> 'نيبالي'
            ],
            [

                'en'=> 'Dutch',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'Dutch Antilier',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'New Caledonian',
                'ar'=> 'كاليدوني'
            ],
            [

                'en'=> 'New Zealander',
                'ar'=> 'نيوزيلندي'
            ],
            [

                'en'=> 'Nicaraguan',
                'ar'=> 'نيكاراجوي'
            ],
            [

                'en'=> 'Nigerien',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Nigerian',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Niuean',
                'ar'=> 'ني'
            ],
            [

                'en'=> 'Norfolk Islander',
                'ar'=> 'نورفوليكي'
            ],
            [

                'en'=> 'Northern Marianan',
                'ar'=> 'ماريني'
            ],
            [

                'en'=> 'Norwegian',
                'ar'=> 'نرويجي'
            ],
            [

                'en'=> 'Omani',
                'ar'=> 'عماني'
            ],
            [

                'en'=> 'Pakistani',
                'ar'=> 'باكستاني'
            ],
            [

                'en'=> 'Palauan',
                'ar'=> 'بالاوي'
            ],
            [

                'en'=> 'Palestinian',
                'ar'=> 'فلسطيني'
            ],
            [

                'en'=> 'Panamanian',
                'ar'=> 'بنمي'
            ],
            [

                'en'=> 'Papua New Guinean',
                'ar'=> 'بابوي'
            ],
            [

                'en'=> 'Paraguayan',
                'ar'=> 'بارغاوي'
            ],
            [

                'en'=> 'Peruvian',
                'ar'=> 'بيري'
            ],
            [

                'en'=> 'Filipino',
                'ar'=> 'فلبيني'
            ],
            [

                'en'=> 'Pitcairn Islander',
                'ar'=> 'بيتكيرني'
            ],
            [

                'en'=> 'Polish',
                'ar'=> 'بوليني'
            ],
            [

                'en'=> 'Portuguese',
                'ar'=> 'برتغالي'
            ],
            [

                'en'=> 'Puerto Rican',
                'ar'=> 'بورتي'
            ],
            [

                'en'=> 'Qatari',
                'ar'=> 'قطري'
            ],
            [

                'en'=> 'Reunionese',
                'ar'=> 'ريونيوني'
            ],
            [

                'en'=> 'Romanian',
                'ar'=> 'روماني'
            ],
            [

                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Rwandan',
                'ar'=> 'رواندا'
            ],
            [

                'en'=> '',
                'ar'=> 'Kittitian/Nevisian'
            ]
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
