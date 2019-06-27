<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_product', function (Blueprint $table) {
            
            $table->string('kdProduct', '15')->primary();
            $table->string('namaProduct', '255');
            $table->string('kdKategori', '10')->index();
            $table->string('kdSatuan', '10')->index();
            $table->bigInteger('hargaJual')->default('0');
            $table->bigInteger('diskon')->default('0');
            $table->text('deskripsi');
            $table->enum('promo', ['Y', 'T']);
            $table->string('urlFoto', '191');
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
        //
        Schema::dropIfExists('tb_product');
    }
}
