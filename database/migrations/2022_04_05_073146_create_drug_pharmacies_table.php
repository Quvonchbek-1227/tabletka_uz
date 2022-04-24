<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugPharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('pharmacy_id');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('drugs')
            ->onDelete('cascade');

            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')
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
        Schema::dropIfExists('drug_pharmacies');
    }
}
