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
    Schema::table('pacotes', function (Blueprint $table) {
        $table->text('itinerario')->nullable()->after('descricao');
        $table->text('oque_inclui')->nullable()->after('itinerario');
        $table->text('condicoes_gerais')->nullable()->after('oque_inclui');
    });
}

public function down(): void
{
    Schema::table('pacotes', function (Blueprint $table) {
        $table->dropColumn(['itinerario', 'oque_inclui', 'condicoes_gerais']);
    });
    }
};
