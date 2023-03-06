<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //

    public function index() {
        return view('todos.index');
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {

        $rules = [
            'title' => 'required|max:255'
        ];

        $messages = [
            'title.required' => "Title shouldn't be empty",
            'title.max' => "Todo list should not be greater than 255 characters"
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        // $request->validate([
        //     'title' => 'Required'
        // ]);

        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

    public function edit() {
        return view('todos.edit');
    }
}
