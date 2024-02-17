<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu', 50)->unique();
            $table->unsignedBigInteger('idjenis');
            $table->foreign('idjenis')->references('id')->on('jenis')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto1', 255);
            $table->string('foto2', 255)->nullable();
            $table->string('foto3', 255)->nullable();
            $table->text('deskripsi');
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
        Schema::dropIfExists('menus');
    }
}
