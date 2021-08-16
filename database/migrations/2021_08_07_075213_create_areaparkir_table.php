<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaparkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaparkir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_area');
            $table->integer('jumlah_slot');
            $table->char('alamat');
            $table->char('kelurahan');
            $table->char('kecamatan');
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
        Schema::dropIfExists('areaparkir');
    }
}
