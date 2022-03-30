<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Forms\BuyerForm;
use Kris\LaravelFormBuilder\FormBuilder;


class BuyerController extends Controller
{
    public function index()
    {
        $buyer = Buyer::all();
        return view('buyer.list',compact('buyer'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(BuyerForm::class, [
            'method' => 'POST',
            'url' => route('buyer.store')
        ]);
        return view('buyer.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(BuyerForm::class);

        $form->redirectIfNotValid();

        Buyer::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $buyer= Buyer::find($id); 
        return view('buyer.detail',compact('buyer'));
    }
}
