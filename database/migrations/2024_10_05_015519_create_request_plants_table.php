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
        Schema::create('request_plants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->foreignId('users')->onDelete('cascade')->constrained();
            $table->string('plant_name');
            $table->string('scientific');
            $table->text('description');
            $table->unsignedBigInteger('handle_by')->nullable(true)->foreignId('users')->onDelete('set null')->constrained();
            $table->text('image_path');
            $table->text('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_plants');
    }
};
