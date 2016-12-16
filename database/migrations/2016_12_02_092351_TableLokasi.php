<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('tbl_lokasi') == false)
      {
        Schema::create('tbl_lokasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_posting');
            $table->string('lat');
            $table->string('long');
            $table->timestamps();
        });
      }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tbl_lokasi');
        // Schema::table('tbl_lokasi', function(Blueprint $table) {
        //     $table->renameColumn('id_posting', 'posting_id');
        // });
    }
}
