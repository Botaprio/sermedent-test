<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->boolean('sexo');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->string('fechaNacimiento');
            $table->string('direccion')->nullable();
            $table->string('comuna')->nullable();
            $table->integer('fonoFijo')->nullable();
            $table->integer('fonoCelular')->nullable();
            $table->string('mail')->nullable();
            $table->string('especialidad')->nullable();
            $table->unsignedBigInteger('departamento_id');

            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');;


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
        Schema::dropIfExists('doctors');
    }
}
