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
    public function index()
    {
        return view('home',[
            'users' => User::latest()->get(),
            'courses' => Course::all(),
            'students' => Student::all(),
        ]);
    }
}
