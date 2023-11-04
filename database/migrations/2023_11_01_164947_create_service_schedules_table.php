<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('service_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_vehicle');
            $table->foreign('id_vehicle')->references('id')->on('vehicles');
            $table->dateTime('tanggal_servis');
            $table->text('deskripsi')->nullable();
            $table->string('status_servis');
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
        Schema::dropIfExists('service_schedules');
    }
}
