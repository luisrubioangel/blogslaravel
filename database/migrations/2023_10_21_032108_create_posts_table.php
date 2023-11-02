<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('extract');
            $table->text('body');
            $table->enum('status', [1, 2])->default(1);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('catergory_id');

            $table->foreign('user_id')->references('id')->on('users')->onDeleter('cascade');
            $table->foreign('catergory_id')->references('id')->on('catergories')->onDeleter('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};