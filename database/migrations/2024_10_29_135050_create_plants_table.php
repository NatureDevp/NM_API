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
            $table->text('description')->nullable();
            $table->string('status')->nullable(false)->default('Active');
            $table->string('cover')->nullable();
            $table->integer('likes')->nullable(false)->default(0);

            // Foreign keys
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete()->nullOnUpdate();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('request_id')->nullable()->constrained('request_plants')->onDelete('cascade')->onUpdate('cascade');
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
