<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class BuyerForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('fullname', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Purchaser Name'
        ])
        -> add('cellnumber', Field::TEXT, [
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
