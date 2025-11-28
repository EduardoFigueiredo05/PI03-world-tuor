<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('continente');
            $table->string('pais');
            $table->text('descricao');
            $table->decimal('preco',8,2);
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->foreignId('image_package_id')
                  ->nullable()
                  ->constrained('image_packages')
                  ->onDelete('set null');
            // --------------------------------

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pacotes');
    }
};