<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('email');
          $table->string('telefone');
          $table->string('celular');
          $table->dateTime('nascimento');
          $table->string('cep');
          $table->string('endereco');
          $table->string('bairro');
          $table->string('cidade');
          $table->string('uf');
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
        Schema::dropIfExists('localidades');
    }
}
