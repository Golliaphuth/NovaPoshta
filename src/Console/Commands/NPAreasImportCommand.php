<?php

namespace Golliaphuth\NovaPoshta\Console\Commands;

use Golliaphuth\NovaPoshta\Models\NPArea;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class NPAreasImportCommand extends Command
{
    protected $signature = 'np:areas';

    protected $description = 'Import areas from API Nova Poshta';

    public function handle()
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
            $data = $response->json()['data'];
            foreach($data as $r) {
                $area = NPArea::create([
                    'ref' => $r['Ref']
                ]);
                $area->translates()->createMany([
                    ['lang' => 'uk', 'name' => $r['Description']],
                    ['lang' => 'ru', 'name' => $r['DescriptionRu']],
                ]);
            }
        }
        return 0;
    }
}
