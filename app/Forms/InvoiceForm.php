<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;



class InvoiceForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('name', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Purchaser Name'
        ])
        -> add('cell', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Cell Number'
        ])
        -> add('address', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Address'
         ])
         ->add('submit', 'submit',[
            'label' => 'Submit!'
        ]);
    }
}
