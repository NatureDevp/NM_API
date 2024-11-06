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
            $table->string('name')->nullable(false);
            $table->string('type')->nullable(false);
            $table->text('description')->nullable();
            $table->string('effect')->nullable();
            $table->string('cover')->nullable();
            $table->integer('ratings')->nullable(false)->default(0);
            $table->string('status')->nullable(false)->default('Active');

            //RELATIONSHIP TO PLANT [FK]
            $table->foreignId('plant_id')->constrained('plants')->onDelete('cascade')->onUpdate('cascade');

            // Foreign keys
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete()->nullOnUpdate();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->onUpdate('cascade');

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
