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
    Schema::create('photo', function (Blueprint $table) {
        $table->id('photo_id');
        $table->string('caption', 50)->nullable();
        $table->date('date_taken')->nullable();

        $table->foreignId('equipment_id')
              ->nullable()
              ->constrained('equipment', 'equipment_id')
              ->nullOnDelete()
              ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
