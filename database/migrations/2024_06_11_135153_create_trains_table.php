<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * CREATE TABLE `trains` (
     * `id` BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
     * `azienda` VARCHAR(255) NOT NULL,
     * `stazione_partenza` VARCHAR(255) NOT NULL,
     * `stazione_arrivo` VARCHAR(255) NOT NULL,
     * `orario_partenza` TIME NOT NULL,
     * `orario_arrivo` TIME NOT NULL,
     * `codice_treno` VARCHAR(255) NOT NULL,
     * `numero_carrozze` INT NOT NULL,
     * `in_orario` TINYINT(1) NOT NULL DEFAULT 1,
     * `cancellato` TINYINT(1) NOT NULL DEFAULT 0,
     * `created_at` TIMESTAMP NULL,
     * `updated_at` TIMESTAMP NULL,
     * PRIMARY KEY(`id`)
     * );
     * 

     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
