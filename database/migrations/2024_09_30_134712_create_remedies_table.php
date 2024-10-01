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
        Schema::create('remedies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plant_id');
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->string('image');
            $table->text('ingredients');
            $table->integer('prep_time');
            $table->string('frequency');
            $table->text('side_effects')->nullable();
            $table->string('rating');
            $table->text('instructions')->nullable();
            $table->string('storage')->nullable();
            $table->string('dosage')->nullable();
            $table->boolean('approved')->default(false);
            $table->string('source')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remedies');
    }
};
