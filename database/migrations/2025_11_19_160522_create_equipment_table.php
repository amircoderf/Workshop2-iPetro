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
    Schema::create('equipment', function (Blueprint $table) {
        $table->id('equipment_id');
        $table->string('tag_no', 50);
        $table->text('description')->nullable();
        $table->string('dosh_reg_no', 50);

        $table->foreignId('plant_id')
              ->nullable()
              ->constrained('plant', 'plant_id')
              ->cascadeOnDelete()
              ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
