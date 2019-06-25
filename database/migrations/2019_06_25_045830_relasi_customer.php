<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_customer', function (Blueprint $table) {
            $table->foreign('username', 'username_ifk')->references( 'username')->on('tb_user')->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        DB::unprepared('CREATE TRIGGER BIcustomer BEFORE INSERT ON `tb_customer` FOR EACH ROW
                BEGIN
                   INSERT INTO `tb_user` (`email`, `username`, `password` , `hakAkses` , `created_at`, `updated_at`) VALUES (NEW.email, NEW.username, NEW.password, \'customer\' ,NEW.created_at, NEW.updated_at);
                END');

        DB::unprepared('CREATE TRIGGER ADmember AFTER DELETE ON `tb_customer` FOR EACH ROW
                BEGIN
                   DELETE FROM `tb_user` WHERE `tb_user`.`username` = OLD.username;
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_customer', function (Blueprint $table) {
            //
            $table->dropForeign('username_ifk');
            
        });
        DB::unprepared('DROP TRIGGER `BIcustomer`');
        DB::unprepared('DROP TRIGGER `ADmember`');
    }
}
