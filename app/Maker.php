<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apteka extends Model
{
    protected $table = 'maker';
    protected $fillable=['id_maker','title','address', 'phone','fax','email','website','brief_description'];
}