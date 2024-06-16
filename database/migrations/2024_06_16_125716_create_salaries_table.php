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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('salary_id');
            $table->foreignId('salary_emp_id')
            ->references('emp_id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('salary_ammount');
            $table->string('salary_month');
            $table->date('salary_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
