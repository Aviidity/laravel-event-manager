<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEventAttendeesTable extends Migration
{
    public function up()
    {
        Schema::create('user_event_attendees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('event_id')->constrained('events');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_event_attendees');
    }
}
