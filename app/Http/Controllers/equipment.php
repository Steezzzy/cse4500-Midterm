<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\EquipForm;

class equipment extends Controller
{
    public function index()
    {
        $equipment = equipment::all();
        return view('equipment.list',compact('equipment'));
    }

    public function create()
    {
        return view('invoices.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'Invoice Number' => 'required',
             'Price' => 'required',
             'Name' => 'required',
             'Purchase Date' => 'required',
             'manufacture' => 'required',
             'category' => 'required',
        ]);

        $invoice = invoice::create([ 
             'Invoice Number' => $request->purchase, 
             'Price' => $request->user, 
             'Name' => $request->notes,
             'Purchase Date' => $request->notes,
             'manufacture' => $request->manufacture,
             'category' => $request->category, 
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $invoice= invoice::find($id); 
        return view('invoice.show',compact('invoice'));
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
       
        
    }
}
