<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->text('azienda');
            $table->text('stazione_di_partenza');
            $table->text('stazione_di_arrivo');
            $table->dateTime('orario_di_partenza', 0);
            $table->dateTime('orario_di_arrivo', 0);
            $table->unsignedInteger('codice_treno');
            $table->unsignedInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
