@extends('todos.layout')

@section('content')
    <div class="text-center pt-10">
        <h1 class="text-2xl">Todo View</h1>

        <ul>
        @foreach($todos as $todo) 

            <li>{{$todo->title}}</li>

        @endforeach
        </ul>
    </div>
@endsection




