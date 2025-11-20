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
    Schema::create('photo_report', function (Blueprint $table) {
        $table->id('photo_report_id');

        $table->foreignId('inspection_id')
              ->nullable()
              ->constrained('inspection', 'inspection_id')
              ->cascadeOnDelete()
              ->cascadeOnUpdate();

        $table->foreignId('finding_id')
              ->nullable()
              ->constrained('finding', 'finding_id')
              ->nullOnDelete()
              ->cascadeOnUpdate();

        $table->foreignId('recommendation_id')
              ->nullable()
              ->constrained('recommendation', 'recommendation_id')
              ->nullOnDelete()
              ->cascadeOnUpdate();

        $table->foreignId('photo_id')
              ->nullable()
              ->constrained('photo', 'photo_id')
              ->cascadeOnDelete()
              ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_report');
    }
};
