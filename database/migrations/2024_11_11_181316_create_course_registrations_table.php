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
        Schema::create('course_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->boolean('isAPPCP');
            
            $table->boolean('isHealthyChild');
            $table->string('healthyChildInn');
            $table->boolean('isStudent');
            $table->boolean('isLegal');
            $table->boolean('shouldBeCheckedOut');
            $table->boolean('managerCheckedOut');
            $table->string('passportSeria');
            $table->string('passpoortNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_registrations');
    }
};
