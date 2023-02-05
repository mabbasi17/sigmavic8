<?php

namespace App\Repository;

use App\Models\Lesson;
use App\Models\Course;

class LessonRepository implements LessonRepositoryInterface
{

    public function index()
    {
        $Lessons = Lesson::get();
        return view('pages.Lessons.index', compact('Lessons'));
    }

    public function create()
    {
        $Courses = Course::get();
        return view('pages.Lessons.create',compact('Courses'));
    }

    public function store($request)
    {
        try {
            $Lesson = new Lesson();
            $Lesson->title = $request->title;
            $Lesson->body = $request->body;
            $Lesson->embeded = $request->embeded;
            $Lesson->Course_id = $request->Course_id;
            $Lesson->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Lessons.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $Lesson = Lesson::findorfail($id);
        $Courses = Course::get();
        return view('pages.Lessons.edit',compact('Lesson','Courses'));
    }

    public function update($request)
    {
        try {
            $Lesson = Lesson::findorfail($request->id);
            $Lesson->title = $request->title;
            $Lesson->body = $request->body;
            $Lesson->embeded = $request->embeded;
            $Lesson->Course_id = $request->Course_id;
            $Lesson->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Lessons.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Lesson::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
