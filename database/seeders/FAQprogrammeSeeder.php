<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\faq_programme;

class FAQprogrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq_programmes = [
            [
                'Question' => 'What are the available Diploma programmes ?',
                'Answer' => 'We offer the following Diploma programmes :

                - Civil Engineering
                - Chemical Engineering
                - Mechanical Engineering
                - Electrical and Electronics Engineering
                - Manufacturing Engineering Technology
                - Computer Science
                - Industrial Science
                - Occupational Safety and Health',
            ],
            [
                'Question' => 'How much are the programme fees ?',
                'Answer' => 'Kindly visit our univeristy website for the detailed programme fee :

                Student > Admission > Programme > Programme fee',
            ],
        ];

        foreach ($faq_programmes as $key => $faq_programme){
            faq_programme::create($faq_programme);
        }
    }
}
