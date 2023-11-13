<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function check(Request $request)
    {
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            $students = Student::all();
            return view('students.index', ['students' => $students]);
         }
          return "<h2>Username or Password Invalid!</h2>";
       }
}
