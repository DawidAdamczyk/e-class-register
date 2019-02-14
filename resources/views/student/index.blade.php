@extends('layouts.app')

@section('content')
    <h2 class="text-center mt-5">These are your ratings</h2>
    <div class="text-right mt-5 mr-5">
        {{Form::open(['action' => 'StudentController@index'])}}
            {{Form::select('size', [
                'math' => 'Math', 
                'english' => 'English',
                'pe' => 'PE',
                'date' => 'Date'
            ])}}
        {{Form::close()}}
    <div>
@endsection