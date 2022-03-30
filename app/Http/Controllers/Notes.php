<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notes extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        return view('notes.list',compact('notes'));
    }
}
