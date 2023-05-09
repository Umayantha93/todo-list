@extends('todos.layout')

@section('content')
    
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">Update Todos</h1>
        <a href="{{route('todos.index')}}" class="mx-5 py-1.5 text-gray-600 cursor-pointer">
            <span class="fas fa-arrow-left" />
        </a>
    </div>
        <x-alert    />
        <form method="POST" action="{{route('todos.update', $todo->id)}}" class="py-5">
            @csrf
            @method('patch')
           
            


            <div class="py-1">
            <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border" placeholder="Title"/>
            </div>
            
            <div class="py-1">
                <textarea name="description" class="p-2 rounded border" placeholder="Description">{{$todo->description}}</textarea>
            </div>
            
            <div class="py-1">
                <input type="submit" value="Update" class="p-2 border rounded-lg"/>
            </div>
        </form>

@endsection