@extends('layouts.master')
@section('css')
    @toastr_css
    @section('title')
      الطلاب اللذين شاهدوا الكورس
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
    الطلاب اللذين شاهدوا الكورس
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
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>اخر درس</th>
                                            <th>تلاعب</th>
                                            <th>تاريخ مشاهدة الدرس</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Views as $View)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$View->student->name}}</td>
                                                <td>{{$View->question_id}}</td>
                                                @if($View->abuse == 0)
                                                    <td style="color: green">لا يوجد تلاعب</td>
                                                @else
                                                    <td style="color: red"> يوجد تلاعب</td>
                                                @endif
                                                <td>{{$View->date}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#repeat.Course{{ $View->course_id }}" title="إعادة">
                                                        <i class="fas fa-repeat"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="repeat.Course{{$View->course_id}}" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('repeat.Course', $View->course_id)}}" method="post">
                                                        {{method_field('post')}}
                                                        {{csrf_field()}}
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;"
                                                                    class="modal-title" id="exampleModalLabel">اعادة مشاهدة الدرس</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>{{$View->student->name}}</h6>
                                                                <input type="hidden" name="student_id" value="{{$View->student_id}}">
                                                                <input type="hidden" name="course_id" value="{{$View->course_id}}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">{{ trans('My_Classes_trans.Close') }}</button>
                                                                    <button type="submit"
                                                                            class="btn btn-info">{{ trans('My_Classes_trans.submit') }}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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
