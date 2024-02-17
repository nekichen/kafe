<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('tglorder');
            $table->bigInteger('totalbayar');
            $table->unsignedBigInteger('idpelanggan')->default(1);
            $table->foreign('idpelanggan')->references('id')->on('pelanggans')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('iduser')->default(1);
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
}
