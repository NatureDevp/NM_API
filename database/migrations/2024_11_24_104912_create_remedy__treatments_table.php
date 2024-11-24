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
        Schema::create('remedy__treatments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->text('description')->nullable();
            $table->foreignId('remedy_id')->constrained('remedy__remedies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remedy__treatments');
    }
};
