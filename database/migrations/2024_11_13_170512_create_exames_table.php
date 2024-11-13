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
        Schema::create('exames', function (Blueprint $table) {
            $table->id();

            $table->text('QD')->nullable();
            $table->text('HMA')->nullable();
            $table->text('AP')->nullable();
            $table->text('AF')->nullable();
            $table->text('IDA')->nullable();
            $table->text('IDA_pf')->nullable();
            $table->text('IDA_cabeca')->nullable();
            $table->text('IDA_olhos')->nullable();
            $table->text('IDA_nariz')->nullable();
            $table->text('IDA_bg')->nullable();
            $table->text('IDA_acr')->nullable();
            $table->text('IDA_ad')->nullable();
            $table->text('IDA_gu')->nullable();
            $table->text('IDA_slh')->nullable();
            $table->text('IDA_sev')->nullable();
            $table->text('IDA_sn')->nullable();
            $table->text('IDA_al')->nullable();
            $table->text('IDA_qe')->nullable();
            $table->text('EFG_afg')->nullable();
            $table->text('EFG_pele')->nullable();
            $table->text('EFG_anexos')->nullable();
            $table->text('EFG_subcutaneo')->nullable();
            $table->text('EFG_gl')->nullable();
            $table->text('EFG_mucosas')->nullable();
            $table->text('EFG_osteomuscular')->nullable();
            $table->text('EFG_peso')->nullable();
            $table->text('EFG_altura')->nullable();
            $table->text('EFG_PA')->nullable();
            $table->text('EFG_FC')->nullable();
            $table->text('EFG_FR')->nullable();
            $table->text('EFG_T')->nullable();
            $table->text('EFE_sc_cranio')->nullable();
            $table->text('EFE_sc_olhos')->nullable();
            $table->text('EFE_sc_nariz')->nullable();
            $table->text('EFE_sc_dfm')->nullable();
            $table->text('EFE_sc_boca')->nullable();
            $table->text('EFE_sc_orofaringe')->nullable();
            $table->text('EFE_sc_pescoco')->nullable();
            $table->text('EFE_ar_ie')->nullable();
            $table->text('EFE_ar_id')->nullable();
            $table->text('EFE_ar_palpacao')->nullable();
            $table->text('EFE_ar_percussao')->nullable();
            $table->text('EFE_ar_ausculta')->nullable();
            $table->text('EFE_ac_inspecao')->nullable();
            $table->text('EFE_ac_palpacao')->nullable();
            $table->text('EFE_ac_ausculta')->nullable();
            $table->text('EFE_ac_arterias')->nullable();
            $table->text('EFE_abdome_inspecao')->nullable();
            $table->text('EFE_abdome_ausculta')->nullable();
            $table->text('EFE_abdome_percussao')->nullable();
            $table->text('EFE_abdome_figado')->nullable();
            $table->text('EFE_abdome_baco')->nullable();
            $table->text('EFE_abdome_rins')->nullable();
            $table->text('EFE_abdome_ps')->nullable();
            $table->text('EFE_abdome_pd')->nullable();
            $table->text('EFE_agu_ar')->nullable();
            $table->text('EFE_agu_ge')->nullable();
            $table->text('EFE_cv_inspecao')->nullable();
            $table->text('EFE_cv_pmc')->nullable();
            $table->text('EFE_cv_membros')->nullable();
            $table->text('EFE_sn_ep')->nullable();
            $table->text('EFE_sn_mv-fm-cm')->nullable();
            $table->text('EFE_sn_sensibilidade')->nullable();
            $table->text('EFE_hd1')->nullable();
            $table->text('EFE_hd2')->nullable();
            $table->text('EFE_hd3')->nullable();
            $table->text('EFE_hd4')->nullable();
            $table->text('EFE_hd5')->nullable();
            $table->text('EFE_hd6')->nullable();
            $table->text('EFE_hd7')->nullable();
            $table->text('EFE_hd8')->nullable();
            $table->text('EFE_hd9')->nullable();
            $table->text('EFE_hd10')->nullable();
            $table->text('EFE_sec_bioquimicos')->nullable();
            $table->text('EFE_sec_microbiologicos')->nullable();
            $table->text('EFE_sec_di')->nullable();
            $table->text('EFE_ct_nm')->nullable();
            $table->text('EFE_ct_medicamentosa')->nullable();
            $table->text('EFE_ct_procedimentos')->nullable();
            $table->text('EFE_ct_cirurgia')->nullable();
            $table->text('Aluno')->nullable();
            $table->text('Codigo')->nullable();
            $table->text('Professor')->nullable();
            

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exames');
    }
};
