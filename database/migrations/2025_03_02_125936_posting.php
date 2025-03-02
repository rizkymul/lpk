<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posting', function (Blueprint $table) {
            $table->id(); // Primary Key (Auto Increment)
            $table->string('judul'); // Kolom Judul (String)
            $table->string('foto'); // Kolom Foto (String untuk menyimpan path gambar)
            $table->text('text'); // Kolom Text (Panjang)
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
