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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('emp_id');
        $table->date('start_date');
        $table->date('end_date');
        $table->string('reason')->nullable();
        $table->enum('status', ['pending', 'approved', 'declined'])->default('pending');
        $table->timestamps();

        $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};
