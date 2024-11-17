<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    //  'name',
    //  'local_name',
    //  'scientific_name',
    //  'description',
    //  'like',
    //  'status',
    //  'cover',
    //  'request_plant_id',
    //  'update_id',
    //  'create_id',



    public function up(): void
    {
        Schema::create('plant__plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('scientific_name')->unique();
            $table->text('description');
            $table->unsignedInteger('like')->default(0);
            $table->string('status')->default('Inactive');
            $table->string('cover')->nullable();

            $table->foreignId('request_id')->nullable()->constrained('request__requests')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('update_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('create_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant__plants');
    }
};
