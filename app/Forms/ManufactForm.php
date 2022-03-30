<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ManufactForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('manufacture', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Manufacture'
        ])
        -> add('manfac_email', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Manufacture Email'
        ])
        -> add('manfac_phone', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Manufacture'
         ])
         ->add('submit', 'submit',[
            'label' => 'Submit!'
        ]);
    }
}
