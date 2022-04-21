<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BatchTeacherSubject;
class BatchTeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Assign Nilima Mam to Chemistry Lectures
            ['batch_id' => 13, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 14, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 15, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 16, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 17, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 18, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 19, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 20, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 21, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 22, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 23, 'teacher_id' => 4, 'subject_id' => 3],
            ['batch_id' => 24, 'teacher_id' => 4, 'subject_id' => 3],

            // Assign Nilima Mam to Chemistry Labs
            ['batch_id' => 13, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 14, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 15, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 16, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 17, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 18, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 19, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 20, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 21, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 22, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 23, 'teacher_id' => 4, 'subject_id' => 8],
            ['batch_id' => 24, 'teacher_id' => 4, 'subject_id' => 8]
        ];
        BatchTeacherSubject::insert($data);
    }
}
