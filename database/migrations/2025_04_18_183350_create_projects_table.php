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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('architects')->nullable();
            $table->string('location');
            $table->string('category');
            $table->string('area')->nullable(); // In square meters/feet
            $table->year('project_year');
            $table->decimal('budget', 15, 2)->nullable(); // Project budget
            $table->string('client_name')->nullable();
            $table->enum('status', ['planned', 'in_progress', 'completed', 'on_hold'])->default('completed');
            $table->string('image')->nullable(); // Single project image
            $table->boolean('is_featured')->default(false); // Whether to feature on homepage
            $table->string('slug')->unique(); // For SEO-friendly URLs
            $table->string('project_manager')->nullable(); // Project manager name
            $table->integer('duration')->nullable(); // Project duration in months
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
