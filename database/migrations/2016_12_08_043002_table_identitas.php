<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableIdentitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_identitas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')
            $table->string('nama');
            $table->string('kode');
            $table->text('keterangan');
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
        // Schema::dropIfExists('tbl_identitas');
        // Schema::table('tbl_identitas', function(Blueprint $table){
        //     $table->integer('id_user')->after('id');
        // });
    }
}
