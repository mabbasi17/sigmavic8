<?php

namespace App\Repository;

use App\Models\Grade;
use App\Models\course;
use App\Models\Subject;
use App\Models\Teacher;

class CourseRepository implements CourseRepositoryInterface
{

    public function index()
    {
        $Courses = Course::get();
        return view('pages.Courses.index', compact('Courses'));
    }

    public function create()
    {
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        return view('pages.Courses.create', $data);
    }

    public function store($request)
    {
        try {

            $Courses = new Course();
            $Courses->name = ['ar' => $request->Name_ar];
            $Courses->subject_id = $request->subject_id;
            $Courses->grade_id = $request->Grade_id;
            $Courses->classroom_id = $request->Classroom_id;
            $Courses->teacher_id = $request->teacher_id;
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
        $course = Course::findorFail($id);
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        return view('pages.Courses.edit', $data, compact('cours'));
    }

    public function update($request)
    {
        try {
            $course = Course::findorFail($request->id);
            $course->name = ['ar' => $request->Name_ar];
            $course->subject_id = $request->subject_id;
            $course->grade_id = $request->Grade_id;
            $course->classroom_id = $request->Classroom_id;
            $course->teacher_id = $request->teacher_id;
            $course->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Courses.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Course::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
