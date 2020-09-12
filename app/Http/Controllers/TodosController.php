<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
//fetch all tudos from Database
//display then in the todos index view page
      //$todos=Todo::all();
      return view('todo.index')->with('todos',Todo::all());
    }
    public function show(Todo $todo){
        //dd($todoId);
        return view('todo.show')->with('todo',$todo);
    }
    public function create()
    {
      return view('todo.create');
    }
    public function store()
    {
      $this->validate(request(),[
        'name'=> 'required|min:6|max:20',
        'description' => 'required'
      ]);

      $data=request()->all();

      $todo = new Todo();

      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed = false;

      $todo->save();
      session()->flash('success','Todo created successfuly');
      return redirect('/todos');
    }
    public function edit(Todo $todo)
    {
      return view('todo.edit')->with('todo',$todo);
    }
    public function update(Todo $todo)
    {
      $this->validate(request(),[
        'name'=> 'required|min:6|max:20',
        'description' => 'required'
      ]);

      $data = request()->all();

      $todo->name = $data['name'];
      $todo->description = $data['description'];

      $todo->save();
      session()->flash('success','Todo updated successfuly');
      return redirect('/todos');
    }
    public function destroy(Todo $todo)
    {

      $todo->delete();
      session()->flash('success','Todo deleted successfuly');
      return redirect('/todos');
    }
    public function complete(Todo $todo)
    {
      $todo->completed=true;
      $todo->save();
      session()->flash('success','Todo completed successfuly');
      return redirect('/todos');
    }
}
