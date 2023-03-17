@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">Create Todos</h1>
        <a href="{{route('todos.index')}}" class="mx-5 py-1.5 text-gray-600 cursor-pointer">
            <span class="fas fa-arrow-left" />
        </a>
    </div>
        <x-alert    />
        <form method="POST" action="{{route('todos.store')}}" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border"/>
            <input type="submit" value="Create" class="p-2 border rounded-lg"/>
        </form>
@endsection