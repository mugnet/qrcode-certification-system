<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('ext_name')->nullable();
            $table->enum('sex',['m','f']);
            $table->date('birthdate');
            $table->string('representative');
            $table->string('address');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
