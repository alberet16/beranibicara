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
        Schema::create('nomors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category'); 
            $table->string('judul');
            $table->string('nomor');
            $table->string('alamat');
            $table->timestamps();

            $table->foreign('category')->references('id')->on('kategoris_nomors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomors');
    }
};
