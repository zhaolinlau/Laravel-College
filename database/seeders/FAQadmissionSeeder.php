<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\faqadmission;

class FAQadmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqadmissions = [
            [
                'Question' => 'What are the academic documents needed to be upload ?',
                'Answer' => '
                (i)   University Offer Letter
                (ii)  Identification Card
                (iii) Birth Certificate
                (iv) SPM / SPMV / SVM or equivalent certificates
                (v)  School Graduation Certificate',
            ],
            [
                'Question' => 'When are students allowed to access the e-Community platform and obtain the official student email ?',
                'Answer' => 'The student account will be active after 24 hours. Please login after the stated duration.

                (i) Login e-Community
                    Username : Student ID
                    Password : Identification Number

                (ii) Login Student email
                     Username : student-id@stdmail.uni.my
                     Password : uni@identification-number',
            ],
        ];

        foreach ($faqadmissions as $key => $faqadmission){
            faqadmission::create($faqadmission);
        }
    }
}
