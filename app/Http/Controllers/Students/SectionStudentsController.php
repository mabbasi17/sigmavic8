<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Repository\SectionStudentsRepositoryInterface;
use Illuminate\Http\Request;

class SectionStudentsController extends Controller
{

    protected $SectionStudents;

    public function __construct(SectionStudentsRepositoryInterface $SectionStudents)
    {
        $this->SectionStudents = $SectionStudents;
    }


    public function index()
    {
        return $this->SectionStudents->index();
    }



    public function store(Request $request)
    {
        return $this->SectionStudents->store($request);
    }


    public function show($id)
    {
        return $this->SectionStudents->show($id);
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
