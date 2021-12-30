<?php

namespace App\Http\Controllers;

use App\Cambio;
use App\Categoria;
use App\Color;
use App\Combustivel;
use App\Direcao;
use App\Vehicle;
use App\Http\Requests\VehicleRequest;
use App\Opcional;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    
    public function create()
    {
        $categorias = Categoria::all();
        $cambios = Cambio::all();
        $direcoes = Direcao::all();
        $cores = Color::all();
        $combustiveis = Combustivel::all();
        $opcionais = Opcional::all();

        return view('vehicles.create', [
            'categoria' => $categorias,
            'cambios' => $cambios,
            'direcoes' => $direcoes,
            'cores' => $cores,
            'combustiveis' => $combustiveis,
            'opcionais' => $opcionais
        ]);
    }

    public function store(VehicleRequest $request)
    {


        $data =  [
            'categoria_id' => $request->categoria,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'versao' => $request->versao,
            'placa' => $request->placa,
            'anomodelo' => $request->anomodelo,
            'preco' => $request->preco,
            'km' => $request->km,
            'cambio_id' => $request->cambio,
            'direcao_id' => $request->direcao,
            'cores_id' => $request->cores,
            'combustivel_id' => $request->combustivel,
            'opcionais_id' => $request->opcionais,
            'imagens' => $request->images,

        ];


        try {
            $vehicles = Vehicle::create($data);

            return redirect()->route('ver_vehicles')->with(['message' => 'veiculo cadastrado com sucesso!!!']);
        } catch (\Exception $e) {
            throw new \Exception("erro ao cadastrar " . $e->getMessage());
        }
    }

    public function show()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.show', ['vehicles' => $vehicles]);
    }

    public function edit($id)
    {
        $vehicles = Vehicle::findOrfail($id);
        $categories = Categoria::all();
        $cambios = Cambio::all();
        $direcoes = Direcao::all();
        $cores = Color::all();
        $combustiveis = Combustivel::all();
        $opcionais = Opcional::all();

        return view('vehicles.edit', [
            'vehicles' => $vehicles,
            'categories' => $categories,
            'cambios' => $cambios,
            'direcoes' => $direcoes,
            'cores' => $cores,
            'combustiveis' => $combustiveis,
            'opcionais' => $opcionais
        ]);
    }

    public function update(VehicleRequest  $request, $id)
    {

        $vehicles = Vehicle::findOrFail($id);

        $data = [
            'categoria_id' => $request->categoria,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'versao' => $request->versao,
            'placa' => $request->placa,
            'anomodelo' => $request->anomodelo,
            'preco' => $request->preco,
            'km' => $request->km,
            'cambio_id' => $request->cambio,
            'direcao_id' => $request->direcao,
            'cores_id' => $request->cores,
            'combustivel_id' => $request->combustivel,
            'opcionais_id' => $request->opcionais,
            'imagens' => $request->images,
        ];

      

        try {
            $vehicles->update($data);

            return redirect()->route('ver_vehicles')->with(['message' => 'veiculo editado com sucesso!!!']);
        } catch (\Exception $e) {

            return Redirect::back()->withErrors(['msg' => 'Erro ao atualizar' . $e->getMessage()]);
        }
    }

    public function delete($id)
    {

        $vehicles = Vehicle::findOrFail($id);


        return view('vehicles.delete', ['vehicles' => $vehicles]);
    }

    public function destroy($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        $vehiclesCode = $vehicles->codigo;
        $vehicles->delete();
        return redirect()->route('ver_vehicles')->with(['message' => 'veiculo excluido com sucesso!!!']);
    }
}
