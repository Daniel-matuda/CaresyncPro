@extends('master')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Resultado do Exame Médico</h2>

    @if (session()->has('success'))
        <x-alert key="success" :message="session()->get('success')"/>
    @elseif (session()->has('error'))
        <x-alert key="danger" :message="session()->get('error')"/>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">Informações do Exame</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="QD" class="form-label">Queixa Principal (QD)</label>
                    <textarea class="form-control" id="QD" name="QD" rows="3" readonly>{{ $exame->QD }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="HMA" class="form-label">História da Moléstia Atual (HMA)</label>
                    <textarea class="form-control" id="HMA" name="HMA" rows="3" readonly>{{ $exame->HMA }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="AP" class="form-label">Antecedentes Pessoais (AP)</label>
                    <textarea class="form-control" id="AP" name="AP" rows="3" readonly>{{ $exame->AP }}</textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="AF" class="form-label">Antecedentes Familiares (AF)</label>
                    <textarea class="form-control" id="AF" name="AF" rows="3" readonly>{{ $exame->AF }}</textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="IDA" class="form-label">Idade Atual (IDA)</label>
                    <textarea class="form-control" id="IDA" name="IDA" rows="3" readonly>{{ $exame->IDA }}</textarea>
                </div>
            </div>

            <!-- Outros campos de IDA -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="IDA_pf" class="form-label">Idade Periférica (IDA_pf)</label>
                    <textarea class="form-control" id="IDA_pf" name="IDA_pf" rows="3" readonly>{{ $exame->IDA_pf }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="IDA_cabeca" class="form-label">Idade da Cabeça (IDA_cabeca)</label>
                    <textarea class="form-control" id="IDA_cabeca" name="IDA_cabeca" rows="3" readonly>{{ $exame->IDA_cabeca }}</textarea>
                </div>
            </div>

            <!-- Campos EFG -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="EFG_afg" class="form-label">Exame Físico Geral - Aferição da Frequência Cardíaca (EFG_afg)</label>
                    <textarea class="form-control" id="EFG_afg" name="EFG_afg" rows="3" readonly>{{ $exame->EFG_afg }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="EFG_pele" class="form-label">Exame Físico Geral - Pele (EFG_pele)</label>
                    <textarea class="form-control" id="EFG_pele" name="EFG_pele" rows="3" readonly>{{ $exame->EFG_pele }}</textarea>
                </div>
            </div>

            <!-- Campos EFE -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="EFE_sc_cranio" class="form-label">Exame Físico Especial - Crânio (EFE_sc_cranio)</label>
                    <textarea class="form-control" id="EFE_sc_cranio" name="EFE_sc_cranio" rows="3" readonly>{{ $exame->EFE_sc_cranio }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="EFE_sc_olhos" class="form-label">Exame Físico Especial - Olhos (EFE_sc_olhos)</label>
                    <textarea class="form-control" id="EFE_sc_olhos" name="EFE_sc_olhos" rows="3" readonly>{{ $exame->EFE_sc_olhos }}</textarea>
                </div>
            </div>

            <!-- Campos para outros sistemas e seções -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="EFE_cv_membros" class="form-label">Exame Físico Cardiovascular - Membros (EFE_cv_membros)</label>
                    <textarea class="form-control" id="EFE_cv_membros" name="EFE_cv_membros" rows="3" readonly>{{ $exame->EFE_cv_membros }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="EFE_abdome_figado" class="form-label">Exame Físico do Abdômen - Fígado (EFE_abdome_figado)</label>
                    <textarea class="form-control" id="EFE_abdome_figado" name="EFE_abdome_figado" rows="3" readonly>{{ $exame->EFE_abdome_figado }}</textarea>
                </div>
            </div>

            <!-- Campos adicionais -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="EFE_sec_bioquimicos" class="form-label">Exames Secundários - Bioquímicos (EFE_sec_bioquimicos)</label>
                    <textarea class="form-control" id="EFE_sec_bioquimicos" name="EFE_sec_bioquimicos" rows="3" readonly>{{ $exame->EFE_sec_bioquimicos }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="Aluno" class="form-label">Aluno</label>
                    <input type="text" class="form-control" id="Aluno" name="Aluno" value="{{ $exame->Aluno }}" readonly>
                </div>
            </div>

            <!-- Campos para códigos -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" id="Codigo" name="Codigo" value="{{ $exame->Codigo }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="Professor" class="form-label">Professor</label>
                    <input type="text" class="form-control" id="Professor" name="Professor" value="{{ $exame->Professor }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
