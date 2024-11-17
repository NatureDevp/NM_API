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
        // 'local_name',
        // 'description',
        // 'treatment',
        // 'usage',
        // 'status',
        // 'rating',
        // 'effect',
        // 'plant_id',
        // 'update_id',
        // 'create_id',

        Schema::create('remedy__remedies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('treatment')->nullable();
            $table->string('status')->default('Pending');
            $table->text('usage')->nullable();
            $table->text('side_effect')->nullable();
            $table->text('ingredient')->nullable();
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
