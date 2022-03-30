<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoice = Invoice::all();
        return view('invoice.list',compact('invoice'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(InvoiceForm::class, [
            'method' => 'POST',
            'url' => route('invoice.store')
        ]);
        return view('invoice.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(InvoiceForm::class);

        $form->redirectIfNotValid();

        Invoice::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $invoice= Invoice::find($id); 
        return view('invoice.detail',compact('invoice'));
    }
}
