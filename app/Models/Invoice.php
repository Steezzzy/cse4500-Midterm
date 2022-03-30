<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['date_purchase','buyers_id', 'equipment_id'];


    protected $table = 'invoice';



    public function buyers(){

        return $this->belongsTo(Buyer::class);
    
    }


    public function equipment(){

        return $this->belongsTo(Equipment::class, 'equip_invoice');

    }


}



