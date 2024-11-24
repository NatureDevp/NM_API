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

        // 'name',
        // 'description',
        // 'status',
        // 'rating',
        // 'plant_id',
        // 'update_id',
        // 'create_id',

        Schema::create('remedy__remedies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->text('description');
            $table->string('status')->default('Pending');
            $table->text('side_effect')->nullable();
            $table->unsignedInteger('rating')->default(0);
            $table->string('cover')->nullable();

            $table->foreignId('update_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('create_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('plant_id')->nullable()->constrained('plant__plants')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remedy__remedies');
    }
};
