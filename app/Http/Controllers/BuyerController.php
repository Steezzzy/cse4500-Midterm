<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;



class BuyerController extends Controller
{
    public function index()
    {
        $buyer = Buyer::all();
        return view('buyer.list',compact('buyer'));
    }

    public function create()
    {
        return view('buyer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
             'name' => 'required',
             'cell' => 'required',
             'address' => 'required',
        ]);

        $todo = Buyer::create([ 
             'name' => $request->name, 
             'cell' => $request->cell, 
             'address' => $request->address,
            
        ]);

        return $this->index();
    }


    public function show($id)
    {
        $buyer= Buyer::find($id); 
        return view('buyer.show',compact('buyer'));
    }
}
