<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belis', function (Blueprint $table) {
            $table->id();
            $table->date('tglbeli');
            $table->unsignedBigInteger('iddistributor');
            $table->foreign('iddistributor')->references('id')->on('distributors')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('totalbayar');
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
        Schema::dropIfExists('belis');
    }
}
