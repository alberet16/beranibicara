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
        Schema::create('dukungans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category'); 
            $table->string('judul');
            $table->string('image');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('category')->references('id')->on('kategoris_dukungans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dukungans');
    }
};
