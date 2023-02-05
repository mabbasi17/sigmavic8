<?php

namespace App\Http\Controllers\Teachers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{


    public function store(Request $request)
    {
        try {
            $Lesson = new Lesson();
            $Lesson->title = $request->title;
            $Lesson->body = $request->body;
            $Lesson->embeded = $request->embeded;
            $Lesson->course_id = $request->Course_id;
            $Lesson->save();
            toastr()->success(trans('messages.success'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $Course_id = $id;
        return view('pages.Teachers.dashboard.Lessons.create', compact('Course_id'));
    }


    public function edit($id)
    {
        $Lesson = Lesson::findorFail($id);
        return view('pages.Teachers.dashboard.Lessons.edit', compact('Lesson'));
    }


    public function update(Request $request, $id)
    {
        try {
            $Lesson = Lesson::findorfail($id);
            $Lesson->title = $request->title;
            $Lesson->body = $request->body;
            $Lesson->embeded = $request->embeded;
            $Lesson->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            Lesson::destroy($id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
