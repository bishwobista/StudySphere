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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();

            // Foreign key for student
            $table->foreignId('student_id')->constrained('students')->cascadeOnDelete()->cascadeOnUpdate();

            // Foreign key for college
            $table->foreignId('college_id')->constrained('colleges')->nullable()->cascadeOnDelete()->cascadeOnUpdate();

            // Foreign key for course detail
            $table->foreignId('coursedetail_id')->constrained('courseDetail')->cascadeOnDelete()->cascadeOnUpdate();

            // Additional fields
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
