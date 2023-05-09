@extends('todos.layout')

@section('content')
    
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl">{{$todo->title}}</h1>
    <a href="{{route('todos.index')}}" class="mx-5 py-1.5 text-gray-600 cursor-pointer">
        <span class="fas fa-arrow-left" />
    </a>
</div>
<div>
    <div>

        <p>{{$todo->description}}</p>

    </div>
    
</div>

@endsection