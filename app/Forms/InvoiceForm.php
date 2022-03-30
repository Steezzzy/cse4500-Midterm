<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;



class InvoiceForm extends Form
{
    public function buildForm()
    {
        $this -> 
        add('buyer_id', Field::NUMBER, [
            'rules' => 'required',
        'label' => 'Buyer Number'
        ])
        -> add('equipment_id', Field::NUMBER, [
        'rules' => 'required',
        'label' => 'Equipment Number'
        ])
        -> add('date_purchase', Field::DATE, [
        'rules' => 'required',
        'label' => 'Date of Purchase'
         ])
         ->add('submit', 'submit',[
            'label' => 'Submit!'
        ]);
    }
}
