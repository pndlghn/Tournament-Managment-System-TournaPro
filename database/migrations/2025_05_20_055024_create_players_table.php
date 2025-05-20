<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('jersey_number')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
};
