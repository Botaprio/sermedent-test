<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->date('fechaNacimiento');
            $table->integer('fonoFijo')->nullable();
            $table->integer('fonoCelular')->nullable();
            $table->string('mail')->nullable();
            $table->integer('rutAdultoResponsable')->nullable();


            $table->string('diabetes')->nullable();
            $table->string('sida')->nullable();
            $table->string('hipertension')->nullable();
            $table->string('alergiaMedicamentosa')->nullable();
            $table->string('detalleAlergiaMedicamentosa')->nullable();
            $table->string('otros')->nullable();
            $table->string('detalleOtros')->nullable();
            $table->string('medicamento')->nullable();
            $table->string('detalleMedicamento')->nullable();
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('convenio_id');

            $table->foreign('convenio_id')
                ->references('id')
                ->on('convenios');
//                ->cascadeOnUpdate()
//                ->nullOnDelete();



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
        Schema::dropIfExists('pacientes');
    }
}
