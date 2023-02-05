<?php

namespace App\Http\Controllers\Students\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesLessonsController extends Controller
{

    public function index()
    {
        $Courses = Course::where('grade_id', auth()->user()->Grade_id)
            ->where('classroom_id', auth()->user()->Classroom_id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('pages.Students.dashboard.CoursesLessons.index', compact('Courses'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($Course_id)
    {
        $Courses = Course::where('grade_id', auth()->user()->Grade_id)
            ->where('classroom_id', auth()->user()->Classroom_id)
            ->orderBy('id', 'DESC')
            ->get();
        $student_id = Auth::user()->id;


        $Lessons = Lesson::findOrFail($Course_id)
        ->where('course_id',$Course_id)
        ->get();
        
        return view('pages.Students.dashboard.CoursesLessons.show',compact('Course_id','student_id','Courses','Lessons'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
