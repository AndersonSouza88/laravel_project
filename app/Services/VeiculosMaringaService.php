<?php

namespace App\Services;

use App\Vehicle;
use GuzzleHttp\Client;

class VeiculosMaringaService
{


    private $client;
    private $config;
    private $token;


    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://veiculosmaringa.com.br/api/v01/'


        ]);

        $this->config = config('veiculosmaringa');
        $this->token = 'eyJpdiI6InhZRmFwdSt2VXhMTnY4WEdyOGIxNmc9PSIsInZhbHVlIjoiVUozMXB2WHhvQWNrUjVrS25oUTI0dllZOFwvMzcyZ3A4MG9HQjZOZk4zTm89IiwibWFjIjoiNTYwYmRiMTcxYTk2ZmU0NGQyNzliYzFiMTAyZGU3OTQ4OGI4YzcwZjYyNmE5NGRkMWJiZjc0YzIxZjQyZGY0OSJ9';
    }

    public function insert($data)
    {
       
        try {    
            $newData = $this->parseData($data);
            $response = $this->client->request('POST', 'add', [
                'headers' => [
                    'Vm-Token' => $this->token,
                ],
                'json' => $newData,

            ]);

            $log = json_decode($response->getBody()->getContents());

            if ($log->status == true) {

                $vehicle = Vehicle::find($data->id);

                $vehicle->codigo = $log->codigo;

                $vehicle->save();

            }
            
            return $log;

        } catch (\Exception $e) {
            throw new \Exception('veiculo não cadastrado no portal ' . $e->getMessage());
        }
        
    }

    public function update($data)
    {
        $action = __FUNCTION__;

        $newData = $this->parseData($data, $action);
        $response = $this->client->request('PUT', 'edit', [
            'headers' => [
                'Vm-Token' => $this->token,
            ],
            'json' => $newData,
        ]);
        $log = json_decode($response->getBody()->getContents());
    }




    public function delete($codigo)
    {
      

        $portalCode = [
            'codigo' => $codigo,
        ]; //transforma em formato json

        $response = $this->client->request('DELETE', 'del', [
            'headers' => [
                'Vm-Token' => $this->token,
            ],
            'json' => $portalCode,
        ]);
        $log = json_decode($response->getBody()->getContents());

    }

    public function parseData($data, $action = null)
    {

        $newData = [
            "categoria" => $data->categoria->code,
            "marca" => $data->marca,
            "modelo" => $data->modelo,
            "versao" => $data->versao,
            "placa" => $data->placa,
            "anomodelo" => $data->anomodelo,
            "preco" => $data->preco,
            "km" => $data->km,
            "cambio" => $data->cambio->code,
            "direcao" => $data->direcao->code,
            "combustivel" => $data->combustivel->code,
            "cor" => $data->color->code,
            "opcionais" => $data->opcional->code,
            "fotos" => null
        ];
        if ($action == "update") {
            $newData['codigo'] = $data->codigo;
        }

        return $newData;
    }


}
