@extends('todos.layout')

@section('content')
    <div class="flex justify-center border-b pb-4">
        <h1 class="text-2xl">All The Todos</h1>
        <a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Create New</a>
    </div>
   
    <ul class="my-5 text-center"> 
    <x-alert    />
        @foreach($todos as $todo) 

            <li class="flex justify-center py-3">
               <p>{{$todo->title}}</p> 
               <a href="{{'todos/'.$todo->id.'/edit'}}" class="mx-5 py-1 px-1 bg-orange-400 cursor-pointer rounded text-white">Edit</a>
               <!-- <a href="" class="mx-5 py-1 px-1 bg-red-400 cursor-pointer rounded text-white">Delete</a> -->
            </li>

        @endforeach
    </ul>
    
@endsection




 