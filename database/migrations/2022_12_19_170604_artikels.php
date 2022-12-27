<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id('id_artikels');
            $table->string('judul_artikel')->nullable();
            $table->string('isi_artikel')->nullable();
            $table->string('deskripsi_artikel')->nullable();
            $table->string('gambar_artikel')->nullable();
            $table->string('generate_artikel')->nullable();
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
        //
    }
};
