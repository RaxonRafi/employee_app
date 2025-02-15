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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->unsignedBigInteger('emp_designation_id');
            $table->foreignId('emp_dep_id')
            ->references('dept_id')
            ->on('departments');
            $table->foreign('emp_designation_id')
            ->references('designation_id')
            ->on('designations');
            $table->string('emp_name');
            $table->string('emp_mbl');
            $table->string('emp_email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
