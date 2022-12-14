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
        Schema::create('model_pacientes', function (Blueprint $table) {
            $table->id();
            $nomePaciente->string();
            $dataNascimento->date();
            $cpf->string();
            $bairro->string();
            $rua->string();
            $numero->integer();
            $cidade->string();
            $estado->string();
            $dataPrimeiraConsulta->date();
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
        Schema::dropIfExists('model_pacientes');
    }
};
