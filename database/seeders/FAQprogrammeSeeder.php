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
            [
                'Question' => 'I am a fresh graduate. Can I enrol for the Master programme ?',
                'Answer' => 'Yes, fresh graduates without any working experience is eligible to enrol for the following Masters programmes.

                - Master of Marketing
                - Master of Human Resource Management
                - MA Visual Communication & Media Studies
                - Master in Sustainable Development Management
                - MSc Actuarial Science
                - MSc Computer Science
                - MSc Information Systems
                - MSc Life Sciences
                - MSc Psychology',
            ],
            [
                'Question' => 'I would like to visit your campus, when is your Open Day ?',
                'Answer' => 'Our Open Days are in the month of March, June and December of every year. However, you may :
                (i) Schedule an appointment with our Education Councellor
                (ii) Drop by our Admissions Office (Level H, East Building) during our business hours. Our team of Education Councellor will be available to assist on programme enquiries and admission procedures.',
            ],
            [
                'Question' => 'When do I have to pay my outstanding Semester fees ?',
                'Answer' => 'Semester fees will need to be settled by mid-semester, before the mid-semester tests.',
            ],
        ];

        foreach ($faq_programmes as $key => $faq_programme){
            faq_programme::create($faq_programme);
        }
    }
}
