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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->json('learning_objectives');
            $table->json('prerequisites');
            $table->json('target_audiences');

            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add this line

            $table->string('cover_image')->nullable();
            $table->string('promotional_video')->nullable();
            $table->string('primary_language');

            $table->decimal('price', 8, 2)->default(0.00);
            $table->boolean('is_free')->default(false);

            $table->text('welcome_message')->nullable();
            $table->text('completion_message')->nullable();

            $table->boolean('publishing_status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
