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
        Schema::create('policy_holders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('insurance_policy_id');
            $table->unsignedBigInteger('insurance_order_id');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('claim_status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('insurance_policy_id')->references('id')->on( 'insurance_policies')->onDelete('cascade');
            // $table->foreign('insurance_order_id')->references('id')->on( 'insurance_orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_holders');
    }
};
