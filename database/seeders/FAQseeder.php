<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class FAQseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        foreach(range(1,2)as $value){
            DB::table('faqadmissions')->insert([
                'Question'=>$faker->streetAddress,
                'Answer'=>$faker->address
            ]);

            DB::table('faq_programmes')->insert([
                'Question'=>$faker->streetAddress,
                'Answer'=>$faker->address
            ]);
        }
    }
}
