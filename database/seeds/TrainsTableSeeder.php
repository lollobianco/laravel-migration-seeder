<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [

            [
                'stazione_di_partenza' => 'Genova Nervi',
                'stazione_di_destinazione' => 'Torino',
                'binario_di_partenza' => '5',
                'tipo_di_treno' => 'intercity',
                'prezzo_biglietto' => '25',
            ],
            [
                'stazione_di_partenza' => 'Sestri Levante',
                'stazione_di_destinazione' => 'Genova Brignole',
                'binario_di_partenza' => '2',
                'tipo_di_treno' => 'regionale veloce',
                'prezzo_biglietto' => '3',
            ],

        ];

        foreach($trains as $element){
            $newTrain = new Train();
            $newTrain->stazione_di_partenza = $element['stazione_di_partenza'];
            $newTrain->stazione_di_destinazione = $element['stazione_di_destinazione'];
            $newTrain->binario_di_partenza = $element['binario_di_partenza'];
            $newTrain->tipo_di_treno = $element['tipo_di_treno'];
            $newTrain->prezzo_biglietto = $element['prezzo_biglietto'];
            $newTrain->save();
        }

    }
}
