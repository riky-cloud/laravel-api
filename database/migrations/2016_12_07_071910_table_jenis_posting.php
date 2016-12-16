<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableJenisPosting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tbl_jenis_posting') == false)
        {
            Schema::create('tbl_jenis_posting', function (Blueprint $table) {
                $table->increments('id');
                $table->string('kode');
                $table->string('jenis');
                $table->text('keterangan');
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
        // Schema::dropIfExists('tbl_jenis_posting');
    }
}
