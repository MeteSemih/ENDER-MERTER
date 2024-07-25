<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_type'); // Sergi, Panel, Konferans, Söyleşi
            $table->string('organization'); // Örneğin Hacettepe Üniversitesi, Marmara Üniversitesi
            $table->string('location'); // Şehir ve yer bilgisi
            $table->integer('year'); // Yıl
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
        Schema::dropIfExists('events');
    }
}
