@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الدروس
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
قائمة الدروس : <span class="text-danger">{{$Course->name}}</span>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('Lessons.show',$Course->id)}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">اضافة درس جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">عنوان الدرس</th>
                                            <th scope="col">تفاصبل الدرس</th>
                                            <th scope="col">اسم الكورس</th>
                                            <th scope="col">العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Lessons as $Lesson)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$Lesson->title}}</td>
                                                <td>{{$Lesson->body}}</td>
                                                <td>{{$Lesson->Course->name}}</td>
                                                <td>
                                                    <a href="{{route('Lessons.edit',$Lesson->id)}}"
                                                       class="btn btn-info btn-sm" role="button" aria-pressed="true"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#delete_exam{{ $Lesson->id }}" title="حذف"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                        @include('pages.Teachers.dashboard.Lessons.destroy')
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
