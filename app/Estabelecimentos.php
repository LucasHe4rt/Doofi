<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimentos extends Model
{
    protected $table = "estabelecimentos";

    protected $fillable = [

        'name', 'type', 'address', 'number','phone', 'phone1', 'phone2', 'cellphone', 'cellphone2', 'cellphone3','description'

        ];
}
