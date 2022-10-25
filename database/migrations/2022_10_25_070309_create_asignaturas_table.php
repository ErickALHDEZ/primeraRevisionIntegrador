<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Esta tabla corresponde a los elementos dentro de nuestra base de datos
        //Así que vamos a declarar los campos que necesitaremos.
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();

            $table->string('Clave');
            $table->string('Nombre');
            $table->string('Cambio');
            //Lo ideal sería que las horas fuesen con int pero por motivos de simplicidad
            //Para esta revisión estaremos manejando todo como strings.
            $table->string('HorasTeoricas');
            $table->string('HorasPracticas');
            $table->string('Caracterizacion');

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
        Schema::dropIfExists('asignaturas');
    }
};
