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
        Schema::create('payroll', function (Blueprint $table) {
            $table->id('payroll_id');
            $table->foreignId('emp_id')
            ->references('emp_id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('medical_allowance', 10, 2);
            $table->decimal('festival_bonuse', 10, 2)->nullable();
            $table->decimal('tax', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
