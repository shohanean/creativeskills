<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Course, Student};
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->course_id){
            $students = Student::where('course_id', $request->course_id)->get();
            $course_name = Course::find($request->course_id)->course_name;
        }
        else{
            $students = Student::all();
            $course_name = "";
        }
        $users = User::latest()->get();
        $courses = Course::all();
        return view('home', compact('users', 'courses', 'students', 'course_name'));
    }
}
