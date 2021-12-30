<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable=[
        'code',
        'name'

    ];

    public function vehicles(){

        return $this->belongsToMany('App\Vehicle');
    }
}
