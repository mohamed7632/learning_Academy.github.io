<?php

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
        for($i=0;$i<20;$i++){
       DB::table('course_student')->insert([
           'course_id'=>rand(1,13),
           'student_id'=>rand(1,25),
           'created_at'=>now(),
           'updated_at'=>now(),
       ]);
        }
    }
}
