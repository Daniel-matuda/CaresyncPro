@extends('master')

@section('content')

  @if (auth()->check()) <!-- Verifica se o usuário está autenticado -->
    <div class="container mt-5">
        <h2 class="mb-4">Criar uma ficha de Anamnese</h2>

        @if (session()->has('success'))
            <x-alert key="success" :message="session()->get('success')"/>
        @elseif (session()->has('error'))
            <x-alert key="danger" :message="session()->get('error')"/>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">Informações da Ficha</div>
            <div class="card-body">
                <form action="{{ route('anamnese.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="local_do_atendimento" class="form-label">Local do Atendimento</label>
                            <input type="text" class="form-control" id="local_do_atendimento" name="local_do_atendimento" placeholder="Local do Atendimento">
                            {{ $errors->first('local_do_atendimento') }}
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome do Paciente</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Paciente">
                            {{ $errors->first('nome') }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="data" class="form-label">Data</label>
                            <input type="text" class="form-control" id="data" name="data" placeholder="Data do Atendimento">
                            {{ $errors->first('data') }}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cor" class="form-label">Cor</label>
                            <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor do Paciente">
                            {{ $errors->first('cor') }}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="estado_civil" class="form-label">Estado Civil</label>
                            <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="Estado Civil">
                            {{ $errors->first('estado_civil') }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="profissao" class="form-label">Profissão</label>
                            <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão do Paciente">
                            {{ $errors->first('profissao') }}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nacionalidade" class="form-label">Nacionalidade</label>
                            <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade do Paciente">
                            {{ $errors->first('nacionalidade') }}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="naturalidade" class="form-label">Naturalidade</label>
                            <input type="text" class="form-control" id="naturalidade" name="naturalidade" placeholder="Naturalidade do Paciente">
                            {{ $errors->first('naturalidade') }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="procedencia" class="form-label">Procedência</label>
                            <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="Procedência">
                            {{ $errors->first('procedencia') }}
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Paciente">
                            {{ $errors->first('endereco') }}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Criar Ficha de Anamnese</button>
                </form>
            </div>
        </div>
    </div>

  @else
    <!-- Se o usuário não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Você não tem permissão para acessar essa tela</h4>
        </div>
    </div>
  @endif

@endsection
