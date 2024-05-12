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
        Schema::create('event_calendars', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->string('title')->nullable();
            $table->integer('idpaciente')->nullable();
            $table->integer('idoctor')->nullable();
            $table->integer('idespecialidad')->nullable();
            $table->integer('idisease')->nullable();
            $table->integer('idmedicamentos')->nullable();
            $table->text('diagnostico')->nullable();
            $table->text('observacion')->nullable();
            $table->boolean('condicion')->default(1);
            $table->string('estado')->nullable();
            $table->integer('idusuario_encargado')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_calendars');
    }
};
