<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Repository\LessonRepositoryInterface;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    protected $Lesson;

    public function __construct(LessonRepositoryInterface $Lesson)
    {
        $this->Lesson =$Lesson;
    }

    public function index()
    {
        return $this->Lesson->index();
    }

    public function create()
    {
        return $this->Lesson->create();
    }

    public function store(Request $request)
    {
        return $this->Lesson->store($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return $this->Lesson->edit($id);
    }

    public function update(Request $request)
    {
        return $this->Lesson->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->Lesson->destroy($request);
    }
}
