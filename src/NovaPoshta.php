<?php

namespace Golliaphuth\NovaPoshta;

use Illuminate\Support\Facades\Http;

class NovaPoshta
{
    public static function areas(): void
    {
        $response = Http::acceptJson()
            ->post('https://api.novaposhta.ua/v2.0/json/', [
                "apiKey" => config('nova_poshta.apiKey'),
                "modelName" => "Address",
                "calledMethod" => "getAreas"
            ]);

        if($response->failed()) {
            dd($response->failed());
        }

        if ($response->successful()) {
            $except = config('nova_poshta.regionsExcept');
            $regions = collect($response->json()['data'])
                ->filter(function($region) use ($except){
                    return !in_array($region['Ref'], $except);
                });

            dd($regions);
        }
    }
}
