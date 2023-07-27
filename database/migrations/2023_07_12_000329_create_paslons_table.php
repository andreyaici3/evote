<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaslonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paslons', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_urut');
            $table->string('nama_paslon', 50);
            $table->text('informasi_paslon')->nullable();
            $table->string('foto', 200);
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
        Schema::dropIfExists('paslons');
    }
}
