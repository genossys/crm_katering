<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relasipenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tb_barangkeluar', function (Blueprint $table) {
            $table->index('noTrans');
        });

        Schema::table('tb_barangkeluar', function (Blueprint $table) {
            $table->foreign('noTrans', 'notrans_ifk')->references('noTrans')->on('tb_penjualan')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::table( 'tb_barangkeluar', function (Blueprint $table) {
            $table->dropForeign( 'notrans_ifk');
        });
    }
}
