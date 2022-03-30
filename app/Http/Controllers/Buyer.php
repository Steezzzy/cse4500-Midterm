<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buyer extends Controller
{
    public function index()
    {
        $buyer = Buyer::all();
        return view('todos',compact('todos'));
    }
}
