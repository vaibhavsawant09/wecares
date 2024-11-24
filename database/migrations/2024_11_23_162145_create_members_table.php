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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Primary key
            $table->string('full_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('occupation')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->boolean('terms_and_conditions')->default(false);
            $table->boolean('privacy_policy')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id') // Define foreign key constraint
                ->references('id') // Point to the 'id' column
                ->on('users') // In the 'users' table
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
