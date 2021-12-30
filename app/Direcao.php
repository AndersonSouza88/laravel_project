<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direcao extends Model
{
    protected $fillable=[
        'code',
        'name'

    ];

    public function vehicles(){

        return $this->belongsToMany('App\Vehicle');
    }
}
