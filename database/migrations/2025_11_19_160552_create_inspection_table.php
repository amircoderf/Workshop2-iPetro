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
    Schema::create('inspection', function (Blueprint $table) {
        $table->id('inspection_id');
        $table->string('report_no', 50)->nullable();
        $table->date('report_date');
        $table->date('due_date');

        $table->foreignId('inspector_id')
              ->nullable()
              ->constrained('inspector', 'inspector_id')
              ->nullOnDelete()
              ->cascadeOnUpdate();

        $table->foreignId('manager_id')
              ->nullable()
              ->constrained('manager', 'manager_id')
              ->nullOnDelete()
              ->cascadeOnUpdate();

        $table->foreignId('equipment_id')
              ->nullable()
              ->constrained('equipment', 'equipment_id')
              ->cascadeOnDelete()
              ->cascadeOnUpdate();

        //for postgres use this:
        $table->string('report_status')->default('pending');

        //for mysql use this:
        //$table->enum('report_status', ['pending','reviewed'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection');
    }
};
