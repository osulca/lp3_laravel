<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->integer("id_curso");
            // $table->unsignedBigInteger("id_estudiante");
            $table->foreign("id_curso")->references("id")->on("cursos");
            // $table->foreign("id_estudiante")->references("id")->on("estudiantes"); */
            // $table->foreignId("id_curso")->constrained("cursos");
            $table->foreignId("id_estudiante")->constrained("estudiantes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
