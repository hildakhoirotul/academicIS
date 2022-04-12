<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseStudent = [
            [   'student_id' => 1,
                'course_id' => 3,
                'value' => 'A',
            ],
            [   'student_id' => 1,
                'course_id' => 2,
                'value' => 'B',
            ],
            [   'student_id' => 1,
                'course_id' => 1,
                'value' => 'C',
            ],
            [   'student_id' => 1,
                'course_id' => 4,
                'value' => 'D',
            ],
        ];

        DB::table('course_student')->insert($courseStudent);
    }
}
