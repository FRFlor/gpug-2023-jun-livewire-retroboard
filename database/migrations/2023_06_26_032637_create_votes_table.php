<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voter_id')->constrained('users');
            $table->foreignId('card_id')->constrained('cards');
            $table->unsignedInteger('weight')->default(1);
            $table->timestamps();

            $table->unique(['voter_id', 'card_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
};
