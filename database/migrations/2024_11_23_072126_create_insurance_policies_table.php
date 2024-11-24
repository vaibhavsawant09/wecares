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
        Schema::create('insurance_policies', function (Blueprint $table) {
            $table->id();
            $table->string('policy_name');
            $table->unsignedBigInteger('sub_category_id');
            $table->text('details');
            $table->decimal('premium', 10, 2);
            $table->decimal('coverage_amount', 10, 2);
            $table->integer('tenure');
            $table->string('interval')->default('YEAR');
            $table->string('currency')->default('INR');
            $table->tinyInteger('status');
            $table->date('created_date');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_policies');
    }
};
