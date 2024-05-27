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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('appointment_id')->unsigned();
            $table->decimal('amount', 10, 2);
            $table->enum('payment_status', ['Pending', 'Completed']);
            $table->text('billing_info');
            $table->set('payment_type', ['cash', 'bkash', 'nogod', 'upay', 'free']);
            $table->string('trxid', 30)->nullable();
            $table->timestamps();

            $table->foreign('appointment_id')->references('id')->on('appointments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
