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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titolo del corso
            $table->text('description'); // Descrizione
            $table->string('instructor'); // Nome dell'insegnante
            $table->integer('duration'); // Durata in ore
            $table->decimal('price', 8, 2)->nullable(); // Prezzo del corso
            $table->boolean('published')->default(false); // Stato pubblicazione
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curses');
    }
};
