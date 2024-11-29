<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
         /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacinas', function (Blueprint $table) {
            $table->id();

            $table->string('nome_vacina')->nullable();
            $table->timestamp('data_aplicacao')->nullable();
            $table->timestamp('data_returno')->nullable();
            $table->string('unidade')->nullable();
            $table->string('lote')->nullable();
            $table->string('laboratorio')->nullable();
            $table->string('status_vacina')->nullable();

            $table->unsignedBigInteger('paciente_id')->nullable(); // FK para a tabela users (paciente)
            $table->unsignedBigInteger('medico_id')->nullable(); // FK para a tabela users (médico)

            // Definindo as chaves estrangeiras
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinas');
    }
};
