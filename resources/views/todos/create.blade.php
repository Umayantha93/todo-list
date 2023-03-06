@extends('todos.layout')

@section('content')
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next you need to do</h1>
        <x-alert    />
        <form method="POST" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border"/>
            <input type="submit" value="create" class="p-2 border rounded-lg"/>
        </form>
    </div>
@endsection