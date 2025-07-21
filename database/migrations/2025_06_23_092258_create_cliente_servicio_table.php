<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente_servicio', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('cliente_id')->unsigned();
            // $table->integer('servicio_id')->unsigned();


            //relaciones para claves foraneas
            // $table->foreign('cliente_id')->reference('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('servicio_id')->reference('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('servicio_id')->constrained('servicios')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_servicio');
    }
};
