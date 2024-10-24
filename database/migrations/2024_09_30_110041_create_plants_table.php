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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('scientific')->unique()->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('ailment')->nullable(true);
            $table->unsignedBigInteger('likes')->default(0);
            $table->string('status')->default('active');
            $table->string('cover')->nullable(false);
            $table->unsignedBigInteger('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
