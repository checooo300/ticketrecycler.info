<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //$table->enum('tipo', ['Alimentos', 'Gasolina']);
        /**
         * Debemos considerar para un ticket
         * Tipo de Ticket -> Alimentos -> Gasolina -> Hospedaje -> Transporte
         * Numero de Ticket
         * Fecha de Emision
         * Estado
         * Municipio
         * Importe Total
         *
         * Sitio Web para facturar
         * Codigo1 para facturar
         * Codigo2 para facturar
         * Codigo3 para facturar
         * Codigo4 para facturar
         *
         * Adjuntar Foto
         */
        $table->increments('id');
        $table->string('name',50);
        $table->string('lastname1',50);
        $table->string('lastname2',50);
        $table->string('cellphone',15)->nullable();
        $table->integer('state')->unsigned()->nullable();
        $table->integer('city')->unsigned()->nullable();
        $table->string('zipcode',5)->nullable();
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
