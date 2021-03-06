<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'ram', 'manufac_id','category'];

    protected $table = 'equipment';

    public function manufacture(){

        return $this ->belongsTo(Manufac::class);

    }

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}


