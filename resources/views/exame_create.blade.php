@extends('master')

@section('content')

<div class="container mt-5">
    @if (auth()->check() && auth()->user()->role == 'medic') <!-- Verifica se o usuário está autenticado e se é um médico -->
        <h2 class="mb-4">Criar Exame</h2>

        @if (session()->has('success'))
            <x-alert key="success" :message="session()->get('success')"/>
        @elseif (session()->has('error'))
            <x-alert key="danger" :message="session()->get('error')"/>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">Informações do Exame</div>
            <div class="card-body">
                <form action="{{ route('exame.store') }}" method="post">
                    @csrf

                    <!-- Collapse for General Data -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#generalData" role="button" aria-expanded="false" aria-controls="generalData">
                            Dados Gerais
                        </a>
                        <div class="collapse mt-3" id="generalData">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="QD" class="form-label">QD (Queixa e duração)</label>
                                    <textarea class="form-control" id="QD" name="QD" rows="2"></textarea>
                                    {{ $errors->first('QD') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="HMA" class="form-label">HMA (História da Moléstia Atual)</label>
                                    <textarea class="form-control" id="HMA" name="HMA" rows="2"></textarea>
                                    {{ $errors->first('HMA') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="AP" class="form-label">AP – Antecedentes Pessoais [Antecedentes fisiológicos e patológicos (antecedentes do parto e D.N.P.M.), Hábitos de vida, alimentação e História social e sexual]</label>
                                    <textarea class="form-control" id="AP" name="AP" rows="2"></textarea>
                                    {{ $errors->first('AP') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="AF" class="form-label">AF – Antecedentes Familiares (História Familiar: pais, avós, filhos, tios e primos diretos) </label>
                                    <textarea class="form-control" id="AF" name="AF" rows="2"></textarea>
                                    {{ $errors->first('AF') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapse for IDA Section -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#idaSection" role="button" aria-expanded="false" aria-controls="idaSection">
                            IDA (Interrogatório Sobre Diversos Aparelhos) - (Informações Detalhadas por Área)
                        </a>
                        <div class="collapse mt-3" id="idaSection">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_pf" class="form-label">IDA - Pulmão e Fígado</label>
                                    <textarea class="form-control" id="IDA_pf" name="IDA_pf" rows="2"></textarea>
                                    {{ $errors->first('IDA_pf') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_cabeca" class="form-label">IDA - Cabeça</label>
                                    <textarea class="form-control" id="IDA_cabeca" name="IDA_cabeca" rows="2"></textarea>
                                    {{ $errors->first('IDA_cabeca') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_olhos" class="form-label">IDA - Olhos</label>
                                    <textarea class="form-control" id="IDA_olhos" name="IDA_olhos" rows="2"></textarea>
                                    {{ $errors->first('IDA_olhos') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_nariz" class="form-label">IDA - Nariz</label>
                                    <textarea class="form-control" id="IDA_nariz" name="IDA_nariz" rows="2"></textarea>
                                    {{ $errors->first('IDA_nariz') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_bg" class="form-label">IDA - Boca e Garganta</label>
                                    <textarea class="form-control" id="IDA_bg" name="IDA_bg" rows="2"></textarea>
                                    {{ $errors->first('IDA_bg') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_acr" class="form-label">IDA - Aparelho Cardiovascular e Respiratório</label>
                                    <textarea class="form-control" id="IDA_acr" name="IDA_acr" rows="2"></textarea>
                                    {{ $errors->first('IDA_acr') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_ad" class="form-label">IDA - Aparelho Digestivo</label>
                                    <textarea class="form-control" id="IDA_ad" name="IDA_ad" rows="2"></textarea>
                                    {{ $errors->first('IDA_ad') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_gu" class="form-label">IDA - Geniturinário</label>
                                    <textarea class="form-control" id="IDA_gu" name="IDA_gu" rows="2"></textarea>
                                    {{ $errors->first('IDA_gu') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_slh" class="form-label">IDA - Sistema Linfático e Hematopoiético</label>
                                    <textarea class="form-control" id="IDA_slh" name="IDA_slh" rows="2"></textarea>
                                    {{ $errors->first('IDA_slh') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_sev" class="form-label">IDA - Sistema Endócrino e Vascular</label>
                                    <textarea class="form-control" id="IDA_sev" name="IDA_sev" rows="2"></textarea>
                                    {{ $errors->first('IDA_sev') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_sn" class="form-label">IDA - Sistema Nervoso</label>
                                    <textarea class="form-control" id="IDA_sn" name="IDA_sn" rows="2"></textarea>
                                    {{ $errors->first('IDA_sn') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_al" class="form-label">IDA - Aparelho Locomotor</label>
                                    <textarea class="form-control" id="IDA_al" name="IDA_al" rows="2"></textarea>
                                    {{ $errors->first('IDA_al') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_qe" class="form-label">IDA - Queixas Específicas</label>
                                    <textarea class="form-control" id="IDA_qe" name="IDA_qe" rows="2"></textarea>
                                    {{ $errors->first('IDA_qe') }}
                                </div>
                            </div>
                            <!-- Add more IDA fields here as needed -->
                        </div>
                    </div>

                    <!-- Collapse for Exame Físico Geral -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#efgSection" role="button" aria-expanded="false" aria-controls="efgSection">
                            Exame Físico Geral (EFG)
                        </a>
                        <div class="collapse mt-3" id="efgSection">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_afg" class="form-label">AFG (Aspecto Físico Geral)</label>
                                    <textarea class="form-control" id="EFG_afg" name="EFG_afg" rows="2"></textarea>
                                    {{ $errors->first('EFG_afg') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_pele" class="form-label">Pele</label>
                                    <textarea class="form-control" id="EFG_pele" name="EFG_pele" rows="2"></textarea>
                                    {{ $errors->first('EFG_pele') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_anexos" class="form-label">Anexos</label>
                                    <textarea class="form-control" id="EFG_anexos" name="EFG_anexos" rows="2"></textarea>
                                    {{ $errors->first('EFG_anexos') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_subcutaneo" class="form-label">Subcutâneo</label>
                                    <textarea class="form-control" id="EFG_subcutaneo" name="EFG_subcutaneo" rows="2"></textarea>
                                    {{ $errors->first('EFG_subcutaneo') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_gl" class="form-label">GL (Gânglios Linfáticos)</label>
                                    <textarea class="form-control" id="EFG_gl" name="EFG_gl" rows="2"></textarea>
                                    {{ $errors->first('EFG_gl') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_mucosas" class="form-label">Mucosas</label>
                                    <textarea class="form-control" id="EFG_mucosas" name="EFG_mucosas" rows="2"></textarea>
                                    {{ $errors->first('EFG_mucosas') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_osteomuscular" class="form-label">Osteomuscular</label>
                                    <textarea class="form-control" id="EFG_osteomuscular" name="EFG_osteomuscular" rows="2"></textarea>
                                    {{ $errors->first('EFG_osteomuscular') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_peso" class="form-label">Peso</label>
                                    <textarea class="form-control" id="EFG_peso" name="EFG_peso" rows="2"></textarea>
                                    {{ $errors->first('EFG_peso') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_altura" class="form-label">Altura</label>
                                    <textarea class="form-control" id="EFG_altura" name="EFG_altura" rows="2"></textarea>
                                    {{ $errors->first('EFG_altura') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_PA" class="form-label">PA (Pressão Arterial)</label>
                                    <textarea class="form-control" id="EFG_PA" name="EFG_PA" rows="2"></textarea>
                                    {{ $errors->first('EFG_PA') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_FC" class="form-label">FC (Frequência Cardíaca)</label>
                                    <textarea class="form-control" id="EFG_FC" name="EFG_FC" rows="2"></textarea>
                                    {{ $errors->first('EFG_FC') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_FR" class="form-label">FR (Frequência Respiratória)</label>
                                    <textarea class="form-control" id="EFG_FR" name="EFG_FR" rows="2"></textarea>
                                    {{ $errors->first('EFG_FR') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_T" class="form-label">T (Temperatura)</label>
                                    <textarea class="form-control" id="EFG_T" name="EFG_T" rows="2"></textarea>
                                    {{ $errors->first('EFG_T') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#efeSection" role="button" aria-expanded="false" aria-controls="efeSection">
                            Exame Físico Específico (EFE)
                        </a>
                        <div class="collapse mt-3" id="efeSection">
                            <!-- Exame Físico: Cabeça e Pescoço -->
                            <h5 class="mt-3">Cabeça e Pescoço</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_cranio" class="form-label">Crânio</label>
                                    <textarea class="form-control" id="EFE_sc_cranio" name="EFE_sc_cranio" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_cranio') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_olhos" class="form-label">Olhos</label>
                                    <textarea class="form-control" id="EFE_sc_olhos" name="EFE_sc_olhos" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_olhos') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_nariz" class="form-label">Nariz</label>
                                    <textarea class="form-control" id="EFE_sc_nariz" name="EFE_sc_nariz" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_nariz') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_dfm" class="form-label">DFM (Dentes, Faringe, Mandíbula)</label>
                                    <textarea class="form-control" id="EFE_sc_dfm" name="EFE_sc_dfm" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_dfm') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_boca" class="form-label">Boca</label>
                                    <textarea class="form-control" id="EFE_sc_boca" name="EFE_sc_boca" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_boca') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_orofaringe" class="form-label">Orofaringe</label>
                                    <textarea class="form-control" id="EFE_sc_orofaringe" name="EFE_sc_orofaringe" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_orofaringe') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sc_pescoco" class="form-label">Pescoço</label>
                                    <textarea class="form-control" id="EFE_sc_pescoco" name="EFE_sc_pescoco" rows="2"></textarea>
                                    {{ $errors->first('EFE_sc_pescoco') }}
                                </div>
                            </div>
                    
                            <!-- Exame Físico: Aparelho Respiratório -->
                            <h5 class="mt-3">Aparelho Respiratório</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ar_ie" class="form-label">Inspeção Externa</label>
                                    <textarea class="form-control" id="EFE_ar_ie" name="EFE_ar_ie" rows="2"></textarea>
                                    {{ $errors->first('EFE_ar_ie') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ar_id" class="form-label">Inspeção Direta</label>
                                    <textarea class="form-control" id="EFE_ar_id" name="EFE_ar_id" rows="2"></textarea>
                                    {{ $errors->first('EFE_ar_id') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ar_palpacao" class="form-label">Palpação</label>
                                    <textarea class="form-control" id="EFE_ar_palpacao" name="EFE_ar_palpacao" rows="2"></textarea>
                                    {{ $errors->first('EFE_ar_palpacao') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ar_percussao" class="form-label">Percussão</label>
                                    <textarea class="form-control" id="EFE_ar_percussao" name="EFE_ar_percussao" rows="2"></textarea>
                                    {{ $errors->first('EFE_ar_percussao') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ar_ausculta" class="form-label">Ausculta</label>
                                    <textarea class="form-control" id="EFE_ar_ausculta" name="EFE_ar_ausculta" rows="2"></textarea>
                                    {{ $errors->first('EFE_ar_ausculta') }}
                                </div>
                            </div>
                    
                            <!-- Exame Físico: Aparelho Cardiovascular -->
                            <h5 class="mt-3">Aparelho Cardiovascular</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ac_inspecao" class="form-label">Inspeção Cardiovascular</label>
                                    <textarea class="form-control" id="EFE_ac_inspecao" name="EFE_ac_inspecao" rows="2"></textarea>
                                    {{ $errors->first('EFE_ac_inspecao') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ac_palpacao" class="form-label">Palpação Cardiovascular</label>
                                    <textarea class="form-control" id="EFE_ac_palpacao" name="EFE_ac_palpacao" rows="2"></textarea>
                                    {{ $errors->first('EFE_ac_palpacao') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ac_ausculta" class="form-label">Ausculta Cardiovascular</label>
                                    <textarea class="form-control" id="EFE_ac_ausculta" name="EFE_ac_ausculta" rows="2"></textarea>
                                    {{ $errors->first('EFE_ac_ausculta') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_ac_arterias" class="form-label">Exame de Artérias</label>
                                    <textarea class="form-control" id="EFE_ac_arterias" name="EFE_ac_arterias" rows="2"></textarea>
                                    {{ $errors->first('EFE_ac_arterias') }}
                                </div>
                            </div>


                            <h5 class="mt-3">Abdome</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_inspecao" class="form-label">Inspeção do Abdômen</label>
                                    <textarea class="form-control" id="EFE_abdome_inspecao" name="EFE_abdome_inspecao" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_inspecao') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_ausculta" class="form-label">Ausculta do Abdômen</label>
                                    <textarea class="form-control" id="EFE_abdome_ausculta" name="EFE_abdome_ausculta" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_ausculta') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_percussao" class="form-label">Percussão do Abdômen</label>
                                    <textarea class="form-control" id="EFE_abdome_percussao" name="EFE_abdome_percussao" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_percussao') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_figado" class="form-label">Figado</label>
                                    <textarea class="form-control" id="EFE_abdome_figado" name="EFE_abdome_figado" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_figado') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_baco" class="form-label">Baço</label>
                                    <textarea class="form-control" id="EFE_abdome_baco" name="EFE_abdome_baco" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_baco') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_rins" class="form-label">Rins</label>
                                    <textarea class="form-control" id="EFE_abdome_rins" name="EFE_abdome_rins" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_rins') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_ps" class="form-label">Pontos Sensíveis</label>
                                    <textarea class="form-control" id="EFE_abdome_ps" name="EFE_abdome_ps" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_ps') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_abdome_pd" class="form-label">Pontos Dolorosos</label>
                                    <textarea class="form-control" id="EFE_abdome_pd" name="EFE_abdome_pd" rows="2"></textarea>
                                    {{ $errors->first('EFE_abdome_pd') }}
                                </div>
                            </div>

                            <!-- Exame Físico: Aparelho Gênito-urinário -->
                            <h5 class="mt-3">Aparelho Gênito-urinário</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_agu_ar" class="form-label">Ânus e Reto</label>
                                    <textarea class="form-control" id="EFE_agu_ar" name="EFE_agu_ar" rows="3"></textarea>
                                    {{ $errors->first('EFE_agu_ar') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_agu_ge" class="form-label">Genitais Externos</label>
                                    <textarea class="form-control" id="EFE_agu_ge" name="EFE_agu_ge" rows="3"></textarea>
                                    {{ $errors->first('EFE_agu_ge') }}
                                </div>
                            </div>

                            <!-- Exame Físico: Coluna Vertebral -->
                            <h5 class="mt-3">Coluna Vertebral</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_cv_inspecao" class="form-label">Inspeção</label>
                                    <textarea class="form-control" id="EFE_cv_inspecao" name="EFE_cv_inspecao" rows="3"></textarea>
                                    {{ $errors->first('EFE_cv_inspecao') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_cv_pmc" class="form-label">Percussão e Manobra de Compressão</label>
                                    <textarea class="form-control" id="EFE_cv_pmc" name="EFE_cv_pmc" rows="3"></textarea>
                                    {{ $errors->first('EFE_cv_pmc') }}
                                </div>
                            </div>

                            <!-- Exame Físico: Membros -->
                            <h5 class="mt-3">Membros</h5>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="EFE_cv_membros" class="form-label">Membros</label>
                                    <textarea class="form-control" id="EFE_cv_membros" name="EFE_cv_membros" rows="3"></textarea>
                                    {{ $errors->first('EFE_cv_membros') }}
                                </div>
                            </div>

                            <!-- Exame Físico: Sistema Nervoso -->
                            <h5 class="mt-3">Sistema Nervoso</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_sn_ep" class="form-label">Exames Psíquicos</label>
                                    <textarea class="form-control" id="EFE_sn_ep" name="EFE_sn_ep" rows="3"></textarea>
                                    {{ $errors->first('EFE_sn_ep') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_sn_mv-fm-cm" class="form-label">Motricidade Voluntária, Força Muscular e Coordenação</label>
                                    <textarea class="form-control" id="EFE_sn_mv-fm-cm" name="EFE_sn_mv-fm-cm" rows="3"></textarea>
                                    {{ $errors->first('EFE_sn_mv-fm-cm') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_sn_sensibilidade" class="form-label">Sensibilidade</label>
                                    <textarea class="form-control" id="EFE_sn_sensibilidade" name="EFE_sn_sensibilidade" rows="3"></textarea>
                                    {{ $errors->first('EFE_sn_sensibilidade') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="EFE_sn_sinais_meningeos" class="form-label">Sinais Meníngeos</label>
                                    <textarea class="form-control" id="EFE_sn_sinais_meningeos" name="EFE_sn_sinais_meningeos" rows="3"></textarea>
                                    {{ $errors->first('EFE_sn_sinais_meningeos') }}
                                </div>
                            </div>

                            <div class="mb-3">
                                <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#hipotesesSection" role="button" aria-expanded="false" aria-controls="hipotesesSection">
                                    Hipóteses Diagnósticas
                                </a>
                                <div class="collapse mt-3" id="hipotesesSection">
                                    <!-- Laço para as 10 hipóteses -->
                                    @for ($i = 1; $i <= 10; $i++)
                                    <div class="mb-3">
                                        <a class="btn btn-light w-100" data-bs-toggle="collapse" href="#hipotese{{ $i }}" role="button" aria-expanded="false" aria-controls="hipotese{{ $i }}">
                                            Hipótese {{ $i }}
                                        </a>
                                        <div class="collapse mt-3" id="hipotese{{ $i }}">
                                            <textarea class="form-control" id="hipotese_{{ $i }}" name="hipotese_{{ $i }}" rows="3" placeholder="Descreva a Hipótese {{ $i }}"></textarea>
                                            {{ $errors->first('hipotese_' . $i) }}
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>

                            <!-- Solicitação de exames complementares -->
                            <h5 class="mt-3">Solicitação de Exames Complementares</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sec_bioquimicos" class="form-label">Bioquímicos (séricos, urina, fezes)</label>
                                    <textarea class="form-control" id="EFE_sec_bioquimicos" name="EFE_sec_bioquimicos" rows="3"></textarea>
                                    {{ $errors->first('EFE_sec_bioquimicos') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sec_microbiologicos" class="form-label">Microbiológicos</label>
                                    <textarea class="form-control" id="EFE_sec_microbiologicos" name="EFE_sec_microbiologicos" rows="3"></textarea>
                                    {{ $errors->first('EFE_sec_microbiologicos') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFE_sec_di" class="form-label">De Imagem (radiografia, ultrassom, etc.)</label>
                                    <textarea class="form-control" id="EFE_sec_di" name="EFE_sec_di" rows="3"></textarea>
                                    {{ $errors->first('EFE_sec_di') }}
                                </div>
                            </div>

                            <!-- Conduta terapêutica -->
                            <h5 class="mt-3">Conduta Terapêutica</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="EFE_ct_nm" class="form-label">Não Medicamentosa</label>
                                    <textarea class="form-control" id="EFE_ct_nm" name="EFE_ct_nm" rows="3"></textarea>
                                    {{ $errors->first('EFE_ct_nm') }}
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="EFE_ct_medicamentosa" class="form-label">Medicamentosa</label>
                                    <textarea class="form-control" id="EFE_ct_medicamentosa" name="EFE_ct_medicamentosa" rows="3"></textarea>
                                    {{ $errors->first('EFE_ct_medicamentosa') }}
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="EFE_ct_procedimentos" class="form-label">Procedimentos</label>
                                    <textarea class="form-control" id="EFE_ct_procedimentos" name="EFE_ct_procedimentos" rows="3"></textarea>
                                    {{ $errors->first('EFE_ct_procedimentos') }}
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="EFE_ct_cirurgia" class="form-label">Cirurgia</label>
                                    <textarea class="form-control" id="EFE_ct_cirurgia" name="EFE_ct_cirurgia" rows="3"></textarea>
                                    {{ $errors->first('EFE_ct_cirurgia') }}
                                </div>
                            </div>

                    

                </div>

                    <!-- Collapse de Assinaturas -->
                    <h5 class="mt-3">Assinaturas</h5>
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#assinaturasCollapse" aria-expanded="false" aria-controls="assinaturasCollapse">
                            Mostrar/Esconder Assinaturas
                        </button>
                    </p>
                    <div class="collapse" id="assinaturasCollapse">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="aluno" class="form-label">Aluno</label>
                                    <div class="signature-line">
                                        <textarea class="form-control" id="aluno" name="aluno" rows="1" placeholder="Digite o nome do aluno..."></textarea>
                                    </div>
                                    {{ $errors->first('aluno') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="codigo" class="form-label">Código</label>
                                    <div class="signature-line">
                                        <textarea class="form-control" id="codigo" name="codigo" rows="1" placeholder="Digite o código..."></textarea>
                                    </div>
                                    {{ $errors->first('codigo') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="professor" class="form-label">Professor</label>
                                    <div class="signature-line">
                                        <textarea class="form-control" id="professor" name="professor" rows="1" placeholder="Digite o nome do professor..."></textarea>
                                    </div>
                                    {{ $errors->first('professor') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Estilo para a linha de assinatura -->
                    <style>

                    </style>


                        
                        


                    </div>
                    <!-- Continue adicionando as demais seções com a mesma estrutura -->
                </div>

                    <button type="submit" class="btn btn-primary w-100">Criar Exame</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <!-- Se o usuário não for médico ou não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Somente um médico pode iniciar um exame médico</h4>
        </div>
    </div>
    @endif
</div>

@endsection
