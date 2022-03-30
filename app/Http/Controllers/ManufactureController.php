<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufac;
use App\Forms\ManufactForm;
use Kris\LaravelFormBuilder\FormBuilder;

class ManufactureController extends Controller
{
    public function index()
    {
        $manufacture = Manufacture::all();
        return view('manufacture.list',compact('manufacture'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ManufactForm::class, [
            'method' => 'POST',
            'url' => route('manufacturer.store')
        ]);
        return view('manufacture.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ManufactForm::class);

        $form->redirectIfNotValid();

        Manufacture::create($form->getFieldValues());

        return $this->index();
    }


    public function show($id)
    {
        $manufacture= Manufacture::find($id); 
        return view('manufacture.detail',compact('manufacture'));
    }
}
