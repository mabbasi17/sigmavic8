<?php

namespace App\Http\Controllers\Teachers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\view;
use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{


    public function index()
    {
        $Courses = Course::where('teacher_id',auth()->user()->id)->get();
        return view('pages.Teachers.dashboard.Courses.index', compact('Courses'));
    }


    public function create()
    {
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::where('teacher_id',auth()->user()->id)->get();
        return view('pages.Teachers.dashboard.Courses.create', $data);
    }


    public function store(Request $request)
    {
        try {
            $Courses = new Course();
            $Courses->name = ['ar' => $request->Name_ar];
            $Courses->subject_id = $request->subject_id;
            $Courses->grade_id = $request->Grade_id;
            $Courses->classroom_id = $request->Classroom_id;
            $Courses->teacher_id = auth()->user()->id;
            $Courses->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Courses.create');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }



    public function edit($id)
    {
        $Course = Course::findorFail($id);
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::where('teacher_id',auth()->user()->id)->get();
        return view('pages.Teachers.dashboard.Courses.edit', $data, compact('Course'));
    }

    public function show($id)
    {
        $Lessons = Lesson::where('Course_id',$id)->get();
        $Course = Course::findorFail($id);
        return view('pages.Teachers.dashboard.Lessons.index',compact('Lessons','Course'));
    }


    public function update(Request $request)
    {
        try {
            $Course = Course::findorFail($request->id);
            $Course->name = ['ar' => $request->Name_ar];
            $Course->subject_id = $request->subject_id;
            $Course->subject_id = $request->subject_id;
            $Course->classroom_id = $request->Classroom_id;
            $Course->teacher_id = auth()->user()->id;
            $Course->save();




            toastr()->success(trans('messages.Update'));
            return redirect()->route('Courses.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            Course::destroy($id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function student_Course($Course_id)
    {
        $Views = View::where('Course_id', $Course_id)->get();
        return view('pages.Teachers.dashboard.Courses.student_Course', compact('Views'));
    }

    public function repeat_Course(Request $request)
    {
        View::where('student_id', $request->student_id)->where('Course_id', $request->Course_id)->delete();
        toastr()->success('تم فتح الاختبار مرة اخرى للطالب');
        return redirect()->back();
    }

}
