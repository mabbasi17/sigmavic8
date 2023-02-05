@extends('layouts.master')
@section('css')
    @toastr_css
    @livewireStyles
    @section('title')
         الدرس
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        الدرس
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')


@foreach ($Lessons as $Lesson)
<h2>{{$Lesson->title}}</h2>
<p>{{$Lesson->body}}</p>
<div class="text-center text-md-center embed-responsive embed-responsive-16by9">{!!$Lesson->embeded!!}</div>
@endforeach




<br><br><br><br><br><br>
@endsection
@section('js')
    @toastr_js
    @toastr_render
    @livewireScripts
@endsection

