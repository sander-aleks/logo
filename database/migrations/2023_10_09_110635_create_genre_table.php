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
        Schema::create('genre', function (Blueprint $table) {
            $table->id();
            $table->genre_id();
            $table->title();
            $table->description();
            $table->image_path();
            $table->rating();
            $table->created_at();
            $table->updated_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre');
    }
};
