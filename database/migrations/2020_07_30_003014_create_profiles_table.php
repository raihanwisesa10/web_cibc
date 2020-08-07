<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id_pemain');
            $table->string('nama', 30);
            $table->integer('umur');
            $table->string('tinggi', 50);
            $table->string('berat', 50);
            $table->string('posisi', 30);
            $table->date('tanggal_lahir', 30);
            $table->string('nomor_punggung', 30);
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
        Schema::dropIfExists('profiles');
    }
}
