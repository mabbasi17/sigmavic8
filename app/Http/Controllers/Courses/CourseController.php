<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Repository\CourseRepositoryInterface;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    protected $Course;

    public function __construct(CourseRepositoryInterface $Course)
    {
        $this->Course =$Course;
    }

    public function index()
    {
        return $this->Course->index();
    }

    public function create()
    {
        return $this->Course->create();
    }


    public function store(Request $request)
    {
        return $this->Course->store($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return $this->Course->edit($id);
    }

    public function update(Request $request)
    {
        return $this->Course->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->Course->destroy($request);
    }
}
