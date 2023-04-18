<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->dateTime('date');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('events');
    }
}
