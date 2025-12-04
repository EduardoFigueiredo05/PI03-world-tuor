<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {

        //Presta atenção seus safados!!
        
    Schema::create('pacotes', function (Blueprint $table) {
        $table->id(); // Cria uma coluna 'id' auto-incremental como chave primária
        $table->string('nome'); // Cria uma coluna 'nome' do tipo string (VARCHAR)
        $table->string('continente'); // Cria uma coluna 'continente' do tipo string
        $table->string('pais'); // Cria uma coluna 'pais' do tipo string
        $table->text('descricao'); // Cria uma coluna 'descricao' do tipo texto (TEXT), para descrições longas
        $table->decimal('preco',8,2); // Cria uma coluna 'preco' do tipo decimal, com até 8 dígitos e 2 casas decimais
        $table->date('data_inicio'); // Cria uma coluna 'data_inicio' do tipo data (DATE)
        $table->date('data_fim'); // Cria uma coluna 'data_fim' do tipo data (DATE)
        $table->foreignId('image_package_id')->nullable()->constrained('image_packages');
        $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at' para controle de datas de criação e atualização
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('pacotes');
    }
};
