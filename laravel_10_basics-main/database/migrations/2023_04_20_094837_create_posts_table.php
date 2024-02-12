<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt');
            $table->text('content');
            $table->string('thumbnail'); //column pour l'image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * DOWN : est censsé faire le contraire de ce que fais la method (up)
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
