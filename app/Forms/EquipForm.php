<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class EquipForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('name', Field::TEXT, [
            'rules' => 'required',
        'label' => 'Name of Equipment'
        ])
        -> add('price', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Price of item'
        ])
        -> add('ram', Field::TEXT, [
        'rules' => 'required',
        'label' => 'Ram Size'
         ])
         -> add('category', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Category'
             ])
             -> add('manufac_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'ManuFacture ID'
                 ])
         ->add('submit', 'submit',[
            'label' => 'Submit!'
        ]);
    }
}
