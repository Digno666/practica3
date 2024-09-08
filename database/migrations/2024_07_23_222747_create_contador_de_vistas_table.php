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
        Schema::create('contador_de_vistas', function (Blueprint $table) {
            $table->id();
            $table->string('url');
           $table->timestamp('fyh_creacion');
            $table->integer('visitas')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('contador_de_vistas');
    }
};