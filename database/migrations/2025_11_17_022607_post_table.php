<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->id(); // Otomatis membuat kolom ID
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('author');
        $table->text('body'); // 'text' untuk paragraf panjang
        $table->string('image');
        $table->timestamps(); // Otomatis membuat 'created_at' & 'updated_at'
    });  
    }

    
    public function down(): void
    {
        //
    }
};
