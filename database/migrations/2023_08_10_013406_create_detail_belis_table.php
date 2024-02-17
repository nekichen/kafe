<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_belis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nonota');
            $table->foreign('nonota')->references('id')->on('belis')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('kdmenu');
            $table->foreign('kdmenu')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('hargabeli');
            $table->tinyInteger('marginjual');
            $table->integer('jumlahbeli');
            $table->integer('subtotal');
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
        Schema::dropIfExists('detail_belis');
    }
}
