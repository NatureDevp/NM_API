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
        // 'plant_name',
        // 'scientific_name',
        // 'description',
        // 'additional_info',
        // 'is_accepted',
        // 'status',
        // 'request_by',
        // 'accept_by',
        Schema::create('request_plants', function (Blueprint $table) {
            $table->id();
            $table->string('plant_name')->nullable(false);
            $table->string('scientific_name')->nullable();
            $table->text('description')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('status')->nullable(false)->default('Pending');
            $table->boolean('is_accepted')->default(true);
            $table->foreignId('request_by')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('accept_by')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
