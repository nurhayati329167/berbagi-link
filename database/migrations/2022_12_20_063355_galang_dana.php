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
        Schema::create('galang_dana', function (Blueprint $table) {
            $table->id('id_galang');
            $table->string('judul_galang')->nullable();
            $table->string('dana_galang')->nullable();
            $table->date('end_date')->nullable();
            $table->string('deskripsi_galang')->nullable();
            $table->string('gambar_galang')->nullable();
            $table->text('artikel_galang')->nullable();
            $table->string('alamat')->nullable();
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
