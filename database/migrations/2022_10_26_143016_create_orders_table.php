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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('ot',50)->unique();
            $table->date('fecha');
            $table->string('bol',50);
            $table->string('tipo_orden');
            $table->string('hoja_entrada',50)->nullable();
            $table->string('pedido')->nullable();
            $table->float('valor_he')->nullable();
            $table->text('observacion',400)->nullable();
            $table->unsignedBigInteger('id_sede')->nullable();
            $table->unsignedBigInteger('id_proceso')->nullable();
            $table->unsignedBigInteger('id_contrato')->nullable();
            $table->unsignedBigInteger('id_statu')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_sede')->references('id')->on('sedes')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_proceso')->references('id')->on('procesos')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_contrato')->references('id')->on('contratos')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_statu')->references('id')->on('status')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
};
