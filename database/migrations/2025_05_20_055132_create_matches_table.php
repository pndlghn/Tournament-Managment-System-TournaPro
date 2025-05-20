<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained()->onDelete('cascade');
            $table->foreignId('team_home_id')->constrained('teams')->onDelete('cascade');
            $table->foreignId('team_away_id')->constrained('teams')->onDelete('cascade');
            $table->date('match_date');
            $table->time('match_time');
            $table->string('venue')->nullable();
            $table->string('status')->default('scheduled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
