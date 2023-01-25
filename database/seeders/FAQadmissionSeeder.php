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
            [
                'Question' => 'Do students have to make validation before uploading the documents ?',
                'Answer' => 'Students DO NOT have to make validation if the original documents are uploaded.
                However, validation will be NEEDED if a copy of the original document is uploaded.',
            ],
            [
                'Question' => 'What should be done if students do not have the transcript from the academic institution ?',
                'Answer' => 'Students can temporarily upload the results slip of the previous semester. Students will need to immediately upload the complete transcript once they have received it from their academic institution through their student platform.',
            ],
            [
                'Question' => 'What is the next step after settling the student payment and uploading the academic documents ?',
                'Answer' => 'Students will need to complete their registration in the platform by clicking the checkbox for Disclaimer, Vow, and Matric Card Request.',
            ],
        ];

        foreach ($faqadmissions as $key => $faqadmission){
            faqadmission::create($faqadmission);
        }
    }
}
