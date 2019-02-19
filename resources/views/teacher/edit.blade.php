@extends('layouts.app')

@section('content')
{{Form::open(['route' => ['teacher.update', $mark->id], 'method' => 'PUT'])}}
    <div class="form-group">
        {{Form::label("NAME", null) }}
        {{Form::text("name", $mark->name, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("MARK", null) }}
        {{Form::text("mark", $mark->mark, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("WEIGHT", null) }}
        {{Form::text("weight", $mark->weight, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">   
        {{Form::label("COMMENT", null) }}
        {{Form::textarea("comment", $mark->comment, [ 'class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::submit('edit', ['class' => 'btn btn-primary mt-2'])}} 
    </div> 
{{Form::close()}}
@endsection