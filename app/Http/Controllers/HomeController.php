<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Department;
use App\Models\Zone;


class HomeController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        $courses = Course::all();
        $departments = Department::all();
        $zones = Zone::all();
    
        return view('index', compact('students', 'teachers', 'courses', 'departments', 'zones'));
    }




}