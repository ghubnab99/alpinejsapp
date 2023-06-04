<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Zone;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::factory()->count(4)->create();   
        $departments = Department::factory()->count(4)->create();   
        $teachers = Teacher::factory()->count(4)->create();   
        $students = Student::factory()->count(4)->create();   
        $zones = Zone::factory()->count(4)->create();   
        
    
        // $courses = factory(Course::class, 10)->create();
        // $departments = factory(Department::class, 10)->create();
        // $teachers = factory(Teacher::class, 10)->create();
        // $students = factory(Student::class, 10)->create();
        // $zones = factory(Zone::class, 10)->create();
    }
}
