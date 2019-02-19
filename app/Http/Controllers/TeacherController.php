<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mark;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('teacher');
    }

    public function index()
    {
        $students = User::where('role', 'student')->get();
        
        return view('teacher.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mark = new Mark();

        $mark->student_id = $request->input('student_id');

        $mark->name = $request->input('name');

        $mark->mark = $request->input('mark');

        $mark->weight = $request->input('weight');

        $mark->comment = $request->input('comment');

        $mark->save();

        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::where(['id' => $id, 'role' => 'student'])->first();

        $marks = Mark::where('student_id', $id)->get();

        return view('teacher.show', ['student' => $student, 'marks' => $marks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark = Mark::findOrFail($id);

        return view('teacher.edit')->with('mark', $mark);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mark = Mark::find($id);

        $mark->name = $request->input('name');

        $mark->mark = $request->input('mark');

        $mark->weight = $request->input('weight');

        $mark->comment = $request->input('weight');

        $mark->save();

        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = Mark::findorFail($id);

        $mark->delete();

        return redirect('/teacher');
    }
}
