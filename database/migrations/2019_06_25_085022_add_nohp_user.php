<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNohpUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_user', function (Blueprint $table) {
            //
            $table->string('nohp','15')->after('hakAkses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_user', function (Blueprint $table) {
            //
            $table->dropColumn('nohp');
        });
    }
}
