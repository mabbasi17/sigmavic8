<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Animated Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    {{-- <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ URL::asset('assets/css/login.css') }}" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
<body>

    <img class="wave" src=" {{ URL::asset('assets/img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ URL::asset('assets/img/bg.png') }}">
		</div>
		<div class="login-content">
            <form method="POST" action="{{route('login')}}">
                @csrf
				<img src=" {{ URL::asset('assets/img/avatar.png') }}">
				<h2 class="title">

                    @if($type == 'student')
                    <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول الطالب</h3>
                @elseif($type == 'parent')
                    <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول ولي امر</h3>
                @elseif($type == 'teacher')
                    <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول المعلم</h3>
                @elseif($type == 'admin')
                    <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول الادمن</h3>
                @else
                    <h3 style="font-family: 'Cairo', sans-serif" class="mb-30">تسجيل دخول الطالب</h3>
                @endif

                @if (\Session::has('message'))
                <div class="alert alert-danger">
                 <li>{!! \Session::get('message') !!}</li>
                </div>
                @endif



                </h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">

           		   		<input type="text" class="input" placeholder="id or email" name="email" autofocus>
                              <input type="hidden" value="{{$type}}" name="type">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">

           		    	<input type="password" class="input"  placeholder="password" name="password">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                           @enderror
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="تسجيل الدخول">
            </form>
            
        </div>
    </div>


        

    <script type="text/javascript" src="{{ URL::asset('assets/js/main2.js')}}"></script>
    <!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
