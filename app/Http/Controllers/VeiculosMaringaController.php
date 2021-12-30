<?php

namespace App\Http\Controllers;

use App\Jobs\DeletePortal;
use App\Jobs\SendPortal;
use App\Jobs\UpdatePortal;
use Illuminate\Http\Request;
use App\Services\VeiculosMaringaService;
use App\Vehicle;

class VeiculosMaringaController extends Controller
{

    public function insert($vehiclesId)
    {
        $vehicles = Vehicle::find($vehiclesId);

        if (isset($vehicles->codigo)) {
            return redirect()->route('ver_vehicles')->with(['message' => 'veiculo  já esta cadastrado no portal!!!']);
        }
        SendPortal::dispatch($vehiclesId)->delay(now()->addSeconds(5));

        return redirect()->route('ver_vehicles')->with(['message' => 'veiculo cadastrado no portal com sucesso!!!']);
    }

    public function update($vehiclesId)
    {

        UpdatePortal::dispatch($vehiclesId)->delay(now()->addSeconds(5));

        return redirect()->route('ver_vehicles')->with(['message' => 'veiculo atualizado no portal com sucesso!!!']);
    }

    public function delete($vehiclesId)
    {

        DeletePortal::dispatch($vehiclesId)->delay(now()->addSeconds(5));

        return redirect()->route('ver_vehicles')->with(['message' => 'veiculo excluido no portal com sucesso!!!']);
    }
}
