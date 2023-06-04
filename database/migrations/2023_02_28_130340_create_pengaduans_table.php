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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id')->default(1);

            //pelapor
            $table->string('nik_pelapor')->nullable();
            $table->string('nama_pelapor');
            $table->string('usia_pelapor');
            $table->string('alamat_pelapor');
            $table->string('jenis_kelamin_pelapor');
            $table->string('nomor_telepon');

            //korban
            $table->string('nik_korban')->nullable();
            $table->string('nama_korban');
            $table->string('nomor_telepon_korban')->nullable();
            $table->string('usia_korban');
            $table->string('jenis_kelamin_korban');
            $table->string('status_perkawinan');
            $table->string('tindakan_kekerasan');

            $table->string('image')->nullable();
            $table->string('tanggal_terjadi');
            $table->string('rumah');
            $table->text('deskripsi');
            $table->string('alamat_kejadian');
            $table->timestamps();

            
            $table->foreign('status_id')->references('status_id')->on('status_pengaduans');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
