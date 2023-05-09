<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        // $todos = Todo::orderBy('completed')->get();
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo) {

        
        return view('todos.show', compact('todo'));

    }

    public function create() 
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request) 
    {
        // dd($request->all());
        // dd(auth()->user()->todos());
        auth()->user()->todos()->create($request->all());
        // Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

    public function edit(Todo $todo) 
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo) 
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todos.index'))->with('message', 'Updated!');
    }

    public function complete(Todo $todo){
        $todo->update(['completed' => true]);

        return redirect()->back()->with('message', 'Task marked as Completed!');
    }

    public function incomplete(Todo $todo) {
        $todo->update(['completed' => false]);

        return redirect()->back()->with('message', "Task marked as Incomplete!");
    } 

    public function destroy(Todo $todo) {

        $todo->delete();

        return redirect()->back()->with('message', "Delete Completed!");
    }
}
