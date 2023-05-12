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
        for($i=0 ; $i < 10 ; $i++) {
            $train = new Train();

            $train->azienda = $faker->words(2, true);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->city();
            $train->orario_di_partenza = $faker->dateTime();
            $train->orario_di_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->randomNumber(5 , true);
            $train->numero_carrozze = $faker->randomNumber(2);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
