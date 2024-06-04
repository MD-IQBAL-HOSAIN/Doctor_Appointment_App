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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patient_profiles');
            $table->bigInteger('doctor_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patient_profiles');
            $table->foreign('doctor_id')->references('id')->on('doctor_profiles');
            $table->date('date');
            $table->time('time');
            $table->enum('schedule', ['morning', 'afternoon', 'evening'])->default('morning');
            $table->enum('status', ['pending', 'accepted', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
