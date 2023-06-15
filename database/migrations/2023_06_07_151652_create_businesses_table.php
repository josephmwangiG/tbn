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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("business_name");
            $table->string("email");
            $table->string("address")->nullable();
            $table->integer("number_of_employees")->nullable();
            $table->string("specialization")->nullable();
            $table->string("phone_number")->nullable();
            $table->text("description")->nullable();
            $table->double("annual_revenue")->nullable();
            $table->integer("years_of_operation")->nullable();
            $table->string("website")->nullable();
            $table->string("status")->default('Pending');
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
        Schema::dropIfExists('businesses');
    }
};
