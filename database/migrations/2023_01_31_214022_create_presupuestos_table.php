<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();
            //Necesito Rut del Paciente
            //Necesito Rut del doctor tratante (ésto me lo da la acción o el servicio)
            //ES UN SÓLO DOCTOR POR SERVICIO?
            //Necesito ID de la acción o acciones
            //Necesito Valores de cada acción solicitada
            //Necesito el valor total del presupuesto



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
        Schema::dropIfExists('presupuestos');
    }
}
