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
        Schema::create('agendamento_exames', function (Blueprint $table) {
            $table->id();

            $table->string('nome_paciente')->nullable();
            $table->string('nr_sus')->nullable();
            $table->string('sexo')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('nome_exame')->nullable();
            $table->timestamp('data_exame')->nullable();
            $table->dateTime('hora')->nullable();
            $table->string('resultado')->nullable();
            $table->string('especialidade')->nullable();
            $table->string('local')->nullable();
            $table->string('motivo_exame')->nullable();
            $table->string('endereco')->nullable();
            $table->string('nome_medico')->nullable();
            $table->text('observacoes')->nullable();
            $table->string('reavaliacao')->nullable();
            $table->text('prescricoes_medicas')->nullable();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamento_exames');
    }
};
