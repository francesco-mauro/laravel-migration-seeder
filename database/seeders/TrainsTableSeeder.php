<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->azienda = "Trenitalia";
        $newTrain->stazione_partenza = "Zagarolo";
        $newTrain->stazione_arrivo = "Roma";
        $newTrain->orario_partenza = "13:00:00";
        $newTrain->orario_arrivo = "14:00:00";
        $newTrain->codice_treno = 44232466;
        $newTrain->numero_carrozze = 22;
        $newTrain->in_orario = true;
        $newTrain->cancellato = false;
        $newTrain->save();       //se non ho fatto errori, ora salva, prego Rende che funzioni

        dd($newTrain); 
    }
}


