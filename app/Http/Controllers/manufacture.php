<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manufacture extends Controller
{
 
    public function index()
    {
        $manufacture = manufacture::all();
        return view('buyer.list',compact('manufacture'));
    }

}
