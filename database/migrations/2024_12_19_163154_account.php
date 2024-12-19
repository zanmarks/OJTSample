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
        // Create the 'accounts' table
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();  
            $table->string('email')->unique(); 
            $table->string('password'); 
            $table->timestamps(); 
        });

        // Create the 'account_information' table
        Schema::create('account_information', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('account_id'); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('profile_picture')->nullable();  
            $table->timestamps();  
            
            // Define foreign key constraint
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_information');
        Schema::dropIfExists('accounts');
    }
};
