<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combustivel extends Model
{
    protected $fillable=[
        'code',
        'name'

    ];

    public function vehicles(){

        return $this->belongsToMany('App\Vehicle');
    }
}
