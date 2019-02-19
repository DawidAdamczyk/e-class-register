@extends('layouts.app')

@section('content')
<h2 class="text-center">Your students</h2>
<div class="text-right mt-3 mb-3"><a class="btn btn-primary" href="/teacher/create">Add</a></div>
<div class="list-group">
    @foreach ($students as $student)
      <a href="/teacher/{{$student->id}}" class="list-group-item list-group-item-action">{{$student->name}} {{$student->lastname}}</a>
    @endforeach
</div>
@endsection