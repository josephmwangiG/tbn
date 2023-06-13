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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("name");
            $table->string("website")->nullable();
            $table->string("highest_level_of_education")->nullable();
            $table->text("description")->nullable();
            $table->string("status")->default('Pending');
            $table->string("phone")->nullable();
            $table->string("profile")->default('profile.png');
            $table->string("specialization")->nullable();
            $table->string("current_employment")->nullable();
            $table->string("current_employer")->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
