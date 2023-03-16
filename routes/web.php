<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('todos', [TodoController::class, 'index'])->name('todo.index');

Route::get('todos/create', [TodoController::class, 'create']);
Route::post('todos/create', [TodoController::class, 'store']);


Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);
Route::patch('todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::put('todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
Route::put('todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');
Route::delete('todos/{todo}/delete', [TodoController::class, 'delete'])->name('todo.delete');
