<?php

namespace Golliaphuth\NovaPoshta\Entities\Area;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Settlement
{
    public function get($area = null)
    {
        $properties = [];
        if($area) $properties['AreaRef'] = $area;

        $response = Http::acceptJson()
            ->post('https://api.novaposhta.ua/v2.0/json/', [
                "apiKey" => env('NOVA_POSHTA_API'),
                "modelName" => "AddressGeneral",
                "calledMethod" => "getSettlements",
                "methodProperties" => $properties
            ]);

        if($response->failed()) {
            Log::error('Import areas from Nova Poshta', [
                $response->failed()
            ]);
        }

        if ($response->successful()) {
            return $response->json()['data'];
        }

        return false;
    }
}
