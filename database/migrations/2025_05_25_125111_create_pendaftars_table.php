<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
public function up()
{
    Schema::create('pendaftars', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('kelas', 10);
        $table->string('alamat');
        $table->string('no_hp', 20);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('pendaftars');
    }
}
