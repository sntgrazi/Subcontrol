<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 10, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('duration')->default(30); // Duration in days
            $table->enum('unitDuration', ['dias', 'meses'])->default('dias'); // Unit of duration
            $table->json('features')->nullable(); // JSON column for features
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
};
