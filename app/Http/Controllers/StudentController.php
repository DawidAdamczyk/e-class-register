<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrderMarks;
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

    public function orderBy(OrderMarks $request)
    {
        $user = Auth::user();

        if ($request->input('name') == 'all') {
            $marks = Mark::where('student_id', $user->id)->orderByRaw('updated_at DESC')->get();
        } elseif ($request->input('name') !== 'date') {
            $marks = Mark::where('name', $request->input('name'))->orderByRaw('updated_at DESC')->get();
        } else {
            $marks = Mark::where('student_id', $user->id)->orderByRaw('updated_at DESC')->get();
        }

        return view('student.index')->with('marks', $marks);
    }
}
