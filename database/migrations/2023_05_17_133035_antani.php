<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Antani extends Migration
{
    public function up()
    {
        Schema::create('antani', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('età');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antani');
    }
}
