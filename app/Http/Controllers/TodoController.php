<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todos',compact('todos'));
    }


    public function create()
    {
        return view('todos.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'purchase' => 'required',
             'user' => 'required',
             'notes' => 'required',
             'manufacture' => 'required',
             'category' => 'required',
        ]);

        $todo = Todo::create([ 
             'purchase' => $request->purchase, 
             'user' => $request->user, 
             'notes' => $request->notes,
             'manufacture' => $request->manufacture,
             'category' => $request->category, 
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $todo= Todo::find($id); 
        return view('todos.show',compact('todo'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
       
        return $this->index();
    }
}