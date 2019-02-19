@extends('layouts.app')

@section('content')

<div class="list-group">
   <h2 class='text-center'>{{$student->name}} {{$student->lastname}}</h2>
    <div class="mt-5 mb-5"></div>
   <h3 class='text-center mt-5 mb-4'>MATH</h3>
   <table class="table">
        <thead>
        </thead>
        <tbody>
            @foreach ($marks as $mark)
                @if ($mark->name === 'Math')
                <tr>
                    <td><span class="font-weight-bold">Mark:</span> {{$mark->mark}}</td>
                    <td><span class="font-weight-bold">Weight:</span> {{$mark->weight}}</td>
                    <td><span class="font-weight-bold">Comment:</span> {{$mark->comment}}</td>
                    <td><span class="font-weight-bold">Create: 10-11-2017</span></td>
                    <td><span class="font-weight-bold">Update: 10-11-2017</span></td>
                    <td><a href="/teacher/{{$mark->id}}/edit" class="btn btn-primary">Update</a>
                    <td>
                    {{Form::open(['route' => ['teacher.destroy', $mark->id], 'method' => 'DELETE'])}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {{Form::close()}}
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
      </table>

      <h3 class='text-center mt-5 mb-4'>English</h3>
   <table class="table">
        <thead>
        </thead>
        <tbody>
            @foreach ($marks as $mark)
                @if ($mark->name === 'English')
                <tr>
                    <td><span class="font-weight-bold">Mark:</span> {{$mark->mark}}</td>
                    <td><span class="font-weight-bold">Weight:</span> {{$mark->weight}}</td>
                    <td><span class="font-weight-bold">Comment:</span> {{$mark->comment}}</td>
                    <td><span class="font-weight-bold">Create: 10-11-2017</span></td>
                    <td><span class="font-weight-bold">Update: 10-11-2017</span></td>
                    <td><a href="/teacher/{{$mark->id}}/edit" class="btn btn-primary">Update</a>
                    <td>
                    {{Form::open(['route' => ['teacher.destroy', $mark->id], 'method' => 'DELETE'])}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {{Form::close()}}
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
      </table>


      <h3 class='text-center mt-5 mb-4'>PE</h3>
      <table class="table">
           <thead>
           </thead>
           <tbody>
               @foreach ($marks as $mark)
                   @if ($mark->name === 'PE')
                   <tr>
                       <td><span class="font-weight-bold">Mark:</span> {{$mark->mark}}</td>
                       <td><span class="font-weight-bold">Weight:</span> {{$mark->weight}}</td>
                       <td><span class="font-weight-bold">Comment:</span> {{$mark->comment}}</td>
                       <td><span class="font-weight-bold">Create: 10-11-2017</span></td>
                       <td><span class="font-weight-bold">Update: 10-11-2017</span></td>
                       <td><a href="/teacher/{{$mark->id}}/edit" class="btn btn-primary">Update</a>
                       <td>
                       {{Form::open(['route' => ['teacher.destroy', $mark->id], 'method' => 'DELETE'])}}
                           {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                       {{Form::close()}}
                       </td>
                   </tr>
                   @endif
               @endforeach
           </tbody>
         </table>
   
</div>
@endsection