<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoseYazilariTable extends Migration
{
    public function up()
    {
        Schema::create('kose_yazilari', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable(); // İçerik opsiyonel
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kose_yazilari');
    }
}

