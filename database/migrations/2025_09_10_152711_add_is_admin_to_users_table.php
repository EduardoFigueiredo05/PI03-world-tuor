<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Esta migration adiciona uma coluna 'is_admin' à tabela 'users'.
// A coluna é do tipo booleano, tem valor padrão 'false' e fica após o campo 'email'.
// O método 'down' remove a coluna caso a migration seja revertida.

return new class extends Migration
{
    // Método chamado ao aplicar a migration
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Adiciona a coluna 'is_admin' (boolean) após 'email', padrão: false
            $table->boolean('is_admin')->default(false)->after('email');
        });
    }
    
    // Método chamado ao reverter a migration
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove a coluna 'is_admin'
            $table->dropColumn('is_admin');
        });
    }
};