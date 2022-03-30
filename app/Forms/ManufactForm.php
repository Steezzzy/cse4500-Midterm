<?php

manufacturespace App\Forms;

use Kris\LaravelFormBuilder\Form;

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
