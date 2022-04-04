<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('work_time');
            $table->string('region');
            $table->string('adress');
            $table->string('ip_adress');
            $table->string('telefon');
            $table->string('img');
            $table->string('description');
            $table->string('arentr');
            $table->unsignedBigInteger('id_seller');
            $table->timestamps();


            $table->foreign('id_seller')->references('id')->on('sellers')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
}
