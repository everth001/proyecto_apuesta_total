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
        Schema::create('recarga_manuales', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id');
            $table->string('canal_id');
            $table->string('tipo_moneda_id');
            $table->boolean('monto');
            $table->string('voucher');
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
        Schema::dropIfExists('recarga_manuales');
    }
};
