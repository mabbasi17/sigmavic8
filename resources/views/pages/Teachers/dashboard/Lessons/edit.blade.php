@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل سؤال
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل درس:<span class="text-danger">{{$Lesson->title}}</span>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{ route('Lessons.update',$Lesson->id) }}" method="post" autocomplete="off">
                                @method('PUT')
                                @csrf
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">اسم الدرس</label>
                                        <input type="text" name="title" id="input-name"
                                               class="form-control form-control-alternative" value="{{$Lesson->title}}">

                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="body">تفاصيل عن الدرس</label>
                                        <input type="text" name="body" id="input-name"
                                               class="form-control form-control-alternative" autofocus>
                                        <input type="hidden" value="{{$Lesson->body}}" name="Course_id">
                                    </div>
                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="embeded">تضمين الفيديو</label>
                                        <input type="text" name="embeded" id="input-name"
                                               class="form-control form-control-alternative" autofocus>
                                        <input type="hidden" value="{{$Lesson->embeded}}" name="Course_id">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                            </form>
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
