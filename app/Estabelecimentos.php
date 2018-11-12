<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Estabelecimentos extends Model
{
    protected $table = "estabelecimentos";

    protected $fillable = [

        'name','user_id', 'type', 'address', 'number','phone', 'description'

        ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
