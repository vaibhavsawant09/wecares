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
        Schema::create('insurance_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('insurance_policy_id');
            $table->string('order_id');
            $table->decimal('order_amount', 10, 2);
            $table->string('order_currency')->default('INR');
            $table->dateTime('order_expiry_time')->nullable();
            $table->dateTime('order_note')->nullable();
            $table->string('return_url')->nullable();
            $table->string('payment_methods')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_uid')->nullable();
            $table->string('paymode');
            $table->tinyInteger('status')->nullable();
            $table->json('response')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_orders');
    }
};
