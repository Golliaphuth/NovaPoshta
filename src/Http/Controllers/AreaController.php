<?php

namespace Golliaphuth\NovaPoshta\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AreaController
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $response = Http::acceptJson()
            ->post('https://api.novaposhta.ua/v2.0/json/', [
                "apiKey" => config('nova_poshta.apiKey'),
                "modelName" => "Address",
                "calledMethod" => "getAreas"
            ]);

        if($response->failed()) {
            Log::error('Nova Poshta', [ $response->failed() ]);
            return response()->json($response->failed(), 400);
        }

        return $response->json();
    }
}
