<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mark;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('student');
    }

    public function index()
    {
        $user = Auth::user();

        $marks = Mark::where('student_id', $user->id)->get();

        return view('student.index')->with('marks', $marks);
    }

    public function orderBy($item)
    {

    }
}
