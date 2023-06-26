<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->foreignId('voter_id')->constrained('users');
            $table->foreignId('card_id')->constrained('cards');
            $table->timestamps();

            $table->primary('voter_id', 'card_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
};
