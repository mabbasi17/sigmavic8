<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthTrait;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    use AuthTrait;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function loginForm($type){


        return view('auth.login',compact('type',));
    }

    public function login(Request $request){

        if (Auth::guard($this->chekGuard($request))->attempt(['email' => $request->email, 'password' => $request->password])) {



        if($request->type == 'student'){

            $student = Student::findOrFail(auth('student')->user()->id);
            $student->count_login = auth('student')->user()->count_login + 1;
            $student->save();

        $count_student_login = auth('student')->user()->count_login;
        if($count_student_login < 2){
            return $this->redirect($request);
        }else{
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
        }

        }elseif($request->type == 'admin'){
            return $this->redirect($request);
        }elseif($request->type == 'teacher'){
            return $this->redirect($request);
        }else{



            $student = Student::findOrFail(auth('student')->user()->id);
            $student->count_login = auth('student')->user()->count_login + 1;
            $student->save();

        $count_student_login = auth('student')->user()->count_login;
        if($count_student_login < 2){
            return $this->redirect($request);
        }else{
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
        }
        }

        }else{
                     return redirect()->back()->with('message', 'يوجد خطا في كلمة المرور او اسم المستخدم');
        }


     }






public function logout(Request $request,$type)
{
    Auth::guard($type)->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');

}

}

