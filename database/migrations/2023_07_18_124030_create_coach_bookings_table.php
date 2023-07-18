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
        Schema::create('coach_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("coach_id");
            $table->unsignedBigInteger("business_id");
            $table->string("reason");
            $table->date("start_date");
            $table->string("duration");
            $table->string("meeting_preference");
            $table->string("status")->default('Pending');
            $table->text("message")->nullable();
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
        Schema::dropIfExists('coach_bookings');
    }
};
