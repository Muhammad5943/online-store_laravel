<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keranjang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_konfirmasi', function (Blueprint $table){
            $table->increments('id_konfirmasi');
            $table->string('id_user');
            $table->string('id_checkout');            
            $table->string('bukti');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb1_konfirmasi');
    }
}
