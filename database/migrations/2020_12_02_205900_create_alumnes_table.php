<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cognoms');
            $table->date('data_naixement');
            $table->unsignedBigInteger('centre_id')->nullable();
            $table->unsignedBigInteger('ensenyament_id')->nullable();
            $table->foreign('centre_id')->references('id')->on('centres')->onDelete('set null');
            $table->foreign('ensenyament_id')->references('id')->on('ensenyaments')->onDelete('set null');
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
        Schema::dropIfExists('alumnes');
    }
}
