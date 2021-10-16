<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'Medicine';
    protected $fillable=['id_medicine','title','image', 'maker_id', 'form_id', 'dosage', 'amount', 'testimony'];
    
    public function post()
    {
    return $this->belongsTo('App\Maker');
    }
}