<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    public $timestamps =false;
    protected $fillable = [ 
    'nombre','apellidos'
    ];


}