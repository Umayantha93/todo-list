@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All The Todos</h1>
        <a href="{{route('todos.create')}}" class="mx-5 py-1.5 text-blue-600 cursor-pointer">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
   
    <ul class="my-5"> 
    <x-alert    />

        @forelse($todos as $todo) 
        
            <li class="flex justify-between p-2">
            <div>
            @include('todos.complete-button')
            </div>
            @if($todo->completed)
                <p class="line-through">{{$todo->title}}</p>
            @else
                <a class="cursor-pointer" href="{{route('todos.show', $todo->id)}}">{{$todo->title}}</a>
            @endif
                <div>  
                    <a href="{{route('todos.edit', $todo->id)}}"  class="text-orange-400 cursor-pointer">
                        <span class="fas fa-edit px-2" /> 
                    </a>


                    <span class="fas fa-trash text-red-500 px-2 cursor-pointer" 
                    onclick="event.preventDefault();
                        if(confirm('Are you really want to delete?')){
                            document.getElementById('form-delete-{{$todo->id}}')
                        .submit()
                        } 
                    "/> 

                    <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{ route('todos.destroy', $todo->id) }}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
            @empty

            <p>No tasks available, create one.</p>
        
        @endforelse
    </ul>
    
@endsection




 