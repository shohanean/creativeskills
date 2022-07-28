<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Models\Course;
use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index', [
            'courses' => Course::all(),
            'students' => Student::all()
        ]);
    }
    public function import(Request $request)
    {
        Excel::import(new StudentsImport($request->course_id), $request->file('import'));
        return back();
    }
}
