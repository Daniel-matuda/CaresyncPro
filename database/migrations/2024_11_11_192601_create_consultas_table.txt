<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('especialidade')->nullable();
            $table->string('tipo')->nullable();
            $table->string('local')->nullable();
            $table->string('endereco')->nullable();
            $table->string('observacoes')->nullable();
            $table->timestamp('data')->nullable();

            // Definindo as colunas para as FK
            $table->unsignedBigInteger('paciente_id')->nullable(); // FK para a tabela users (paciente)
            $table->unsignedBigInteger('medico_id')->nullable(); // FK para a tabela users (médico)

            // Definindo as chaves estrangeiras
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('set null');

            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
