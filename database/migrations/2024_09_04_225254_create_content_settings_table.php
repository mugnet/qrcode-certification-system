<?php

use App\Models\ContentSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('content_settings', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->text('purpose');
            $table->timestamps();
        });

        ContentSetting::create([
            'body'=>'$this is to certify that:',
            'purpose'=>'(purpose).', 
        ]);


    }

     public function down(): void
    {
        Schema::dropIfExists('content_settings');
    }
};
