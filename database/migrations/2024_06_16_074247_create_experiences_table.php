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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profile_id');
            $table->string('company_image')->nullable();
            $table->string('company_name');
            $table->enum('type', ['education', 'work']);
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date')->nullable(); // Nullable in case the user is currently working
            $table->string('location');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
