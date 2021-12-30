<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=[
        'code',
        'name'

    ];

    public function vehicles(){

        return $this->belongsToMany('App\Vehicle');
    }
}
