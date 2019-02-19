@extends('layouts.app')

@section('content')
{{Form::open(['route' => ['teacher.store']])}}
    <div class="form-group">
        {{Form::label("STUDENT ID", null) }}
        {{Form::text("student_id", null, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label("NAME", null) }}
        {{Form::text("name", null, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("MARK", null) }}
        {{Form::text("mark", null, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("WEIGHT", null) }}
        {{Form::text("weight", null, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("COMMENT", null) }}
        {{Form::textarea("comment", null, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::submit('Add', ['class' => 'btn btn-primary mt-2'])}} 
    </div> 
{{Form::close()}}
@endsection