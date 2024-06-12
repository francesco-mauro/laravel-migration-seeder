<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company;
            $newTrain->stazione_partenza = $faker->city;
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->time;
            $newTrain->orario_arrivo = $faker->time;
            $newTrain->codice_treno = $faker->unique()->numerify('TR#####');
            $newTrain->numero_carrozze = $faker->numberBetween(5, 15);
            $newTrain->in_orario = $faker->boolean;
            $newTrain->cancellato = $faker->boolean;
            $newTrain->save();       //se non ho fatto errori, ora salva, prego Rende che funzioni
        }
    }
}
