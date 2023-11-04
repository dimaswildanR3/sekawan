<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelConsumptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('fuel_consumption', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_vehicle');
            $table->foreign('id_vehicle')->references('id')->on('vehicles');
            $table->dateTime('tanggal_pengisian');
            $table->decimal('jumlah_liter', 8, 2);
            $table->integer('kilometer_awal');
            $table->integer('kilometer_akhir');
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
        Schema::dropIfExists('fuel_consumption');
    }
}
