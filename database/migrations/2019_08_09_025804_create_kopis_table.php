<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKopisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kopis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_kopi', 150);
            $table->string('merk_kopi', 150);
            $table->integer('stok');
            $table->decimal('harga', 9, 2);
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
        Schema::dropIfExists('kopis');
    }
}
