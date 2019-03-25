<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('track_id');
            $table->point('location');
            $table->decimal('elevation',7,2);
            $table->timestamps();

            $table->foreign('track_id')->references('id')->on('tracks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bumps');
    }
}
