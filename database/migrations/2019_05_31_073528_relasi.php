<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tb_product', function(Blueprint $table){
            $table->foreign('kdSatuan','kdsatuanproduk_ifk')->references('kdSatuan')->on('tb_satuan')->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::table('tb_barangmasuk', function(Blueprint $table){
            $table->foreign('kdProduct','kdprodukmasuk_ifk')->references( 'kdProduct')->on('tb_product')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        Schema::table('tb_barangkeluar', function(Blueprint $table){
            $table->foreign('kdProduct','kdprodukkeluar_ifk')->references( 'kdProduct')->on('tb_product')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        Schema::table( 'tb_penjualan', function(Blueprint $table){
            $table->foreign( 'customer','customerpenjualan_ifk')->references( 'username')->on('tb_user')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::table( 'tb_product', function (Blueprint $table) {
            $table->dropForeign( 'kdsatuanproduk_ifk');
        });
        Schema::table( 'tb_barangmasuk', function (Blueprint $table) {
            $table->dropForeign( 'kdprodukmasuk_ifk');
        });
        Schema::table( 'tb_barangkeluar', function (Blueprint $table) {
            $table->dropForeign( 'kdprodukkeluar_ifk');
        });
        Schema::table( 'tb_penjualan', function (Blueprint $table) {
            $table->dropForeign( 'customerpenjualan_ifk');
        });
    }
}
