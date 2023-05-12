<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for($i=0 ; $i < 10 ; $i++) {
        //     $train = new Train();

        //     $train->azienda = $faker->words(2, true);
        //     $train->stazione_di_partenza = $faker->city();
        //     $train->stazione_di_arrivo = $faker->city();
        //     $train->orario_di_partenza = $faker->dateTime();
        //     $train->orario_di_arrivo = $faker->dateTime();
        //     $train->codice_treno = $faker->randomNumber(5 , true);
        //     $train->numero_carrozze = $faker->randomNumber(2);
        //     $train->in_orario = $faker->boolean();
        //     $train->cancellato = $faker->boolean();

        //     $train->save();
        // }

        $trainsFile = fopen(__DIR__ . '/../tabella_treni.csv', 'r');

        $trainsCsv = fgetcsv($trainsFile);


        $trainCsv = fgetcsv($trainsFile);

        while ($trainCsv != false) {
            
            $train = new Train();

            $train->azienda = $trainCsv[0];
            $train->stazione_di_partenza = $trainCsv[1];
            $train->stazione_di_arrivo = $trainCsv[2];
            $train->orario_di_partenza = $trainCsv[3];
            $train->orario_di_arrivo = $trainCsv[4];
            $train->codice_treno = $trainCsv[5];
            $train->numero_carrozze = $trainCsv[6];
            $train->in_orario = $trainCsv[7];
            $train->cancellato = $trainCsv[8];

            $train->save();

            $trainCsv = fgetcsv($trainsFile);
        }
    }
}
