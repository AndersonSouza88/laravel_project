<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'categoria_id',
        'marca',
        'modelo',
        'versao',
        'placa',
        'anomodelo',
        'preco',
        'km',
        'cambio_id',
        'direcao_id',
        'cores_id',
        'combustivel_id',
        'opcionais_id',
        'imagens'
    ];



    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function cambio()
    {
        return $this->belongsTo(Cambio::class);
    }

    public function direcao()
    {
        return $this->belongsTo(Direcao::class);
    }

    public function combustivel()
    {
        return $this->belongsTo(Combustivel::class);
    }

    public function opcional()
    {
        return $this->belongsTo(Opcional::class,'opcionais_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'cores_id');
    }
}
