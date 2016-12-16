b
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePosting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('tbl_posting') == false)
      {
        Schema::create('tbl_posting', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user');
            $table->string('kode_jenis');
            $table->string('title');
            $table->text('alamat');
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
        // Schema::dropIfExists('tbl_posting');
        // Schema::table('tbl_posting', function (Blueprint $table) {
        //     $table->text('kode_jenis')->after('id_user');
        // });
    }
}
