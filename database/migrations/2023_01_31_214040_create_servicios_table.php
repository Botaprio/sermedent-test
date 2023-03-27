<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->String('nombreServicio')->unique();
            $table->foreignId('departamento_id')
                ->nullable()
                ->constrained('departamentos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('paciente_id')
                ->nullable()
                ->constrained('pacientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('estado_id')
                ->nullable()
                ->constrained('estados')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('presupuesto_id')
                ->nullable()
                ->constrained('presupuestos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('pago_id')
                ->nullable()
                ->constrained('pagos')
                ->cascadeOnUpdate()
                ->nullOnDelete();



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
        Schema::dropIfExists('servicios');
    }
}
