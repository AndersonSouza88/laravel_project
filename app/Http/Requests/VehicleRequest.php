<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'categoria' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'versao' => 'required',
            'placa' => 'required|max:7',//para limitar caracteres de string se usa "max:valor maximo"
            'anomodelo' => 'required|numeric|digits_between:1,4',
            'preco' => 'required|numeric|digits_between:1,10',// para integer,numeric se usa "digits_between:valor minimo,valor maximo"
            'km' => 'required|numeric',
            'cambio' => 'required',
            'direcao' => 'required',
            'cores' => 'required',
            'combustivel' => 'required',
            'opcionais' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'categoria.required' => 'Selecione uma categoria',
            'marca.required' => 'O campo marca não foi preenchido!!',
            'modelo.required' => 'O campo modelo não foi preenchido!!',
            'versao.required' => 'O campo versao não foi preenchido!!',
            'placa.required' => 'O campo placa não foi preenchido!!',
            'placa.max'  => 'Limite de placa ultrapassado!!',
            'anomodelo.required' => 'O campo Ano do modelo não foi preenchido!!',
            'preco.numeric' => 'O campo aceita apenas numeros!!',
            'anomodelo.digits_between' => 'Limite de ano ultrapassado!!',
            'preco.required' => 'O campo preco não foi preenchido!!',
            'preco.numeric' => 'O campo aceita apenas numeros!!',
            'preco.digits_between' => 'Limite de preço ultrapassado!!',
            'km.required' => 'O campo km não foi preenchido!!',
            'cambio.required' => 'Selecione um Cambio!!',
            'direcao.required' => 'Selecione uma Direção!!',
            'cores.required' => 'Selecione uma Cor!!',
            'combustivel.required' => 'Selecione um Combustivel!!',
            'opcionais.required' => 'Selecione um opcional!!',
        ];
    }
}
