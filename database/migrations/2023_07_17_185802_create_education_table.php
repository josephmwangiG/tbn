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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("coach_id");
            $table->string("institution");
            $table->string("program");
            $table->string("certificate");
            $table->date("start_date");
            $table->date("compeletion_date")->nullable();
            $table->string("currently_enrolled")->default('No');
            $table->text("description")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('id');

            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
