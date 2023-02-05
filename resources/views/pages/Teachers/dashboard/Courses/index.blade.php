@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الاختبارات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة الاختبارات
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
                                <a href="{{route('Courses.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة كورس جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الكورس</th>
                                            <th>اسم المعلم</th>
                                            <th>المرحلة الدراسية</th>
                                            <th>الصف الدراسي</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Courses as $Course)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$Course->name}}</td>
                                                <td>{{$Course->teacher->Name}}</td>
                                                <td>{{$Course->grade->Name}}</td>
                                                <td>{{$Course->classroom->Name_Class}}</td>
                                                <td>
                                                    <a href="{{route('Courses.edit',$Course->id)}}"
                                                       class="btn btn-info btn-sm" role="button" aria-pressed="true"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#delete_exam{{ $Course->id }}" title="حذف"><i
                                                            class="fa fa-trash"></i></button>
                                                    <a href="{{route('Courses.show',$Course->id)}}"
                                                       class="btn btn-warning btn-sm" title="عرض الدروس" role="button" aria-pressed="true"><i
                                                            class="fa fa-binoculars"></i></a>

                                                    <a href="{{route('student.Course',$Course->id)}}"
                                                       class="btn btn-primary btn-sm" title="من شاهد الكورس" role="button" aria-pressed="true"><i
                                                            class="fa fa-street-view"></i></a>



                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_exam{{$Course->id}}" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Courses.destroy',$Course->id)}}" method="post">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;"
                                                                    class="modal-title" id="exampleModalLabel">حذف الكورس</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p> {{ trans('My_Classes_trans.Warning_Grade') }} {{$Course->name}}</p>
                                                                <input type="hidden" name="id" value="{{$Course->id}}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">{{ trans('My_Classes_trans.Close') }}</button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger">{{ trans('My_Classes_trans.submit') }}</button>
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
