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
        Schema::create('interview_assessors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assessment_interview_id')->nullable();
            $table->bigInteger('assessor')->nullable();
            $table->bigInteger('disposition_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interview_assessors');
    }
};
