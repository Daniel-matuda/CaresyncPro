@extends('master')

@section('content')

<div class="container mt-5">
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

                <!-- Informações Gerais -->
                <h5 class="mb-3">Informações Gerais</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="QD" class="form-label">Queixa Principal</label>
                        <input type="text" class="form-control" id="QD" name="QD" placeholder="Queixa Principal">
                        {{ $errors->first('QD') }}
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="HMA" class="form-label">História da Moléstia Atual</label>
                        <input type="text" class="form-control" id="HMA" name="HMA" placeholder="História da Moléstia Atual">
                        {{ $errors->first('HMA') }}
                    </div>
                </div>

                <!-- Antecedentes -->
                <h5 class="mb-3">Antecedentes</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="AP" class="form-label">Antecedentes Pessoais</label>
                        <input type="text" class="form-control" id="AP" name="AP" placeholder="Antecedentes Pessoais">
                        {{ $errors->first('AP') }}
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="AF" class="form-label">Antecedentes Familiares</label>
                        <input type="text" class="form-control" id="AF" name="AF" placeholder="Antecedentes Familiares">
                        {{ $errors->first('AF') }}
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="IDA" class="form-label">Hábitos de Vida</label>
                        <input type="text" class="form-control" id="IDA" name="IDA" placeholder="Hábitos de Vida">
                        {{ $errors->first('IDA') }}
                    </div>
                </div>

                <!-- Exame Físico Geral -->
                <h5 class="mb-3">Exame Físico Geral</h5>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="EFG_peso" class="form-label">Peso</label>
                        <input type="text" class="form-control" id="EFG_peso" name="EFG_peso" placeholder="Peso">
                        {{ $errors->first('EFG_peso') }}
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="EFG_altura" class="form-label">Altura</label>
                        <input type="text" class="form-control" id="EFG_altura" name="EFG_altura" placeholder="Altura">
                        {{ $errors->first('EFG_altura') }}
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="EFG_PA" class="form-label">Pressão Arterial</label>
                        <input type="text" class="form-control" id="EFG_PA" name="EFG_PA" placeholder="Pressão Arterial">
                        {{ $errors->first('EFG_PA') }}
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="EFG_FC" class="form-label">Frequência Cardíaca</label>
                        <input type="text" class="form-control" id="EFG_FC" name="EFG_FC" placeholder="Frequência Cardíaca">
                        {{ $errors->first('EFG_FC') }}
                    </div>
                </div>

                <!-- Diagnósticos e Condutas -->
                <h5 class="mb-3">Diagnósticos e Condutas</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="EFE_hd1" class="form-label">Hipótese Diagnóstica 1</label>
                        <input type="text" class="form-control" id="EFE_hd1" name="EFE_hd1" placeholder="Hipótese Diagnóstica 1">
                        {{ $errors->first('EFE_hd1') }}
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="EFE_ct_medicamentosa" class="form-label">Conduta Medicamentosa</label>
                        <input type="text" class="form-control" id="EFE_ct_medicamentosa" name="EFE_ct_medicamentosa" placeholder="Conduta Medicamentosa">
                        {{ $errors->first('EFE_ct_medicamentosa') }}
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="EFE_ct_procedimentos" class="form-label">Procedimentos Realizados</label>
                        <input type="text" class="form-control" id="EFE_ct_procedimentos" name="EFE_ct_procedimentos" placeholder="Procedimentos Realizados">
                        {{ $errors->first('EFE_ct_procedimentos') }}
                    </div>
                </div>

                <!-- Botão de Envio -->
                <button type="submit" class="btn btn-primary w-100">Criar Exame</button>
            </form>
        </div>
    </div>
</div>

@endsection
