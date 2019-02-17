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

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Mark</th>
          <th scope="col">Weight</th>
          <th scope="col">Comment</th>
        </tr>
       </thead>
       <tbody>
          @foreach ($marks as $mark)
            <tr>
              <td class='border-right'>{{$mark->name}}</td>
              <td class='border-right'>{{$mark->mark}}</td>
              <td class='border-right'>{{$mark->weight}}</td>
              <td class='border-right'>{{$mark->comment}}</td>
            </tr>
          @endforeach
       </tbody> 
    </table>   
@endsection