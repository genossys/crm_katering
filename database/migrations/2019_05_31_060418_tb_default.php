<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_satuan', function(Blueprint $table){
            $table->string('kdSatuan','10')->primary();
            $table->string('namaSatuan','255');
        });

        Schema::create('tb_product', function(Blueprint $table){
            $table->string('kdProduct','15')->primary();
            $table->string('namaProduk','255');
            $table->string('kdSatuan','10')->index();
            $table->enum('kategori',['satuan','paket']);
            $table->integer('hargaJual')->default('0');
            $table->integer('diskon')->default('0');
            $table->text('isi');
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::create('tb_barangmasuk',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('noTrans','15');
            $table->string('kdProduct','15')->index();
            $table->integer('qty')->default('0');
            $table->date('tglMasuk');
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::create('tb_barangkeluar', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('jenisKeluar','3')->default('PNJ');
            $table->string('noTrans','15');
            $table->date('tglKeluar');
            $table->string('kdProduct', '15')->index();
            $table->integer('qty')->default('0');
            $table->integer('diskon')->default('0');
            $table->text('keterangan');
            $table->enum('status',['0','1']);
            $table->timestamps();
        });

        Schema::create('tb_penjualan', function(Blueprint $table){
            $table->string('noTrans','15')->primary();
            $table->string('customer','25')->index();
            $table->date('tglJual');
            $table->integer('diskon')->default('0');
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
        Schema::dropIfExists( 'tb_satuan');
        Schema::dropIfExists( 'tb_product');
        Schema::dropIfExists( 'tb_barangmasuk');
        Schema::dropIfExists( 'tb_barangkeluar');
        Schema::dropIfExists( 'tb_penjualan');
    }
}
