<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
            $table->string('status')->default('completed'); // e.g., in progress, completed, planned
            $table->text('challenges')->nullable(); // Any challenges faced during the project
            $table->text('solutions')->nullable(); // Solutions implemented
            $table->string('featured_image')->nullable(); // Main project image
            $table->boolean('is_featured')->default(false); // Whether to feature on homepage
            $table->string('slug')->unique(); // For SEO-friendly URLs
            $table->text('materials_used')->nullable(); // Materials used in the project
            $table->string('project_manager')->nullable(); // Project manager name
            $table->integer('duration')->nullable(); // Project duration in months
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
        Schema::dropIfExists('projects');
    }
} 