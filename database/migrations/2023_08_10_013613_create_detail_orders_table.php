<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noorder');
            $table->foreign('noorder')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('kdmenu');
            $table->foreign('kdmenu')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('hargajual');
            $table->integer('jumlah');
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
        Schema::dropIfExists('detail_orders');
    }
}
