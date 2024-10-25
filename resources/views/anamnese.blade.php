@extends('master')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Detalhes da Ficha de Anamnese</h2>

    @if (session()->has('success'))
        <x-alert key="success" :message="session()->get('success')"/>
    @elseif (session()->has('error'))
        <x-alert key="danger" :message="session()->get('error')"/>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">Informações da Ficha</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="local_do_atendimento" class="form-label">Local do Atendimento</label>
                    <input type="text" class="form-control" id="local_do_atendimento" name="local_do_atendimento" value="{{ $anamnese->local_do_atendimento }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Nome do Paciente</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $anamnese->nome }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="data" class="form-label">Data</label>
                    <input type="text" class="form-control" id="data" name="data" value="{{ $anamnese->data }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="cor" class="form-label">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" value="{{ $anamnese->cor }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="estado_civil" class="form-label">Estado Civil</label>
                    <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ $anamnese->estado_civil }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="profissao" class="form-label">Profissão</label>
                    <input type="text" class="form-control" id="profissao" name="profissao" value="{{ $anamnese->profissao }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="nacionalidade" class="form-label">Nacionalidade</label>
                    <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" value="{{ $anamnese->nacionalidade }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="naturalidade" class="form-label">Naturalidade</label>
                    <input type="text" class="form-control" id="naturalidade" name="naturalidade" value="{{ $anamnese->naturalidade }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="procedencia" class="form-label">Procedência</label>
                    <input type="text" class="form-control" id="procedencia" name="procedencia" value="{{ $anamnese->procedencia }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $anamnese->endereco }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
