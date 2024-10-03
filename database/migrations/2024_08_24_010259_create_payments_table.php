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
            $table->id('pay_id'); // Primary key
            $table->integer('invoice_id')->nullable(); // Foreign key
            $table->integer('customer_id')->nullable(); // Foreign key
            $table->string('plate_number'); // Plate number
            $table->decimal('device_charge', 10, 2); // Device charge amount
            $table->decimal('service_charge', 10, 2); // Service charge amount
            $table->decimal('total_amount', 10, 2); // Total amount
            $table->string('payment_status'); // Payment status
            $table->date('pay_from'); // Start date of payment
            $table->date('pay_upto'); // End date of payment
            $table->integer('quantity_paid'); // Quantity of devices paid for
            $table->timestamps(); // Adds created_at and updated_at columns
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
