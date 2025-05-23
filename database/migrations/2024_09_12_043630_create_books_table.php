<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');         // Judul buku
            $table->string('author');        // Nama penulis
            $table->string('book_image');    // Gambar buku
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
