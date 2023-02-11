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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->integer('maid_id');
            $table->integer('customer_id');
            $table->string('nama_maid');
            $table->string('nama_customer');
            $table->string('email_maid');
            $table->string('email_customer');
            $table->string('alamat_maid');
            $table->string('alamat_customer');
            $table->string('no_tlp_maid');
            $table->string('no_tlp_customer');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('penitipan');
            $table->string('upah');
            $table->string('status')->default('Terkirim - Menunggu Respon');
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
        Schema::dropIfExists('histories');
    }
};
