<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_booking');
            $table->foreign('id_booking')->references('id')->on('vehicle_bookings');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedInteger('id_level');
            $table->foreign('id_level')->references('id')->on('approval_levels');
            $table->string('status_persetujuan');
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('approval_history');
    }
}
