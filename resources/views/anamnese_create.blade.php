@extends('master')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Criar uma ficha de Anamnese</h2>

    @if (session()->has('success'))
    <x-alert key="success" :message="session()->get('success')"/>
    @elseif (session()->has('error'))
    <x-alert key="danger" :message="session()->get('error')"/>
    @endif

    <form action="{{ route('anamnese.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="local_do_atendimento" class="form-label">Local do atendimento</label>
        <input type="text" class="form-control" id="local_do_atendimento" name="local_do_atendimento" placeholder="Digite o local do Atendimento">
        {{ $errors->first('local_do_atendimento') }}
      </div>
      
      <div class="mb-3">
        <label for="nome" class="form-label">Nome do paciente</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do paciente">
        {{ $errors->first('nome') }}
      </div>

      <div class="mb-3">
        <label for="data" class="form-label">Data</label>
        <input type="text" class="form-control" id="data" name="data" placeholder="Insira a data">
        {{ $errors->first('data') }}
      </div>
      
      <div class="mb-3">
        <label for="cor" class="form-label">Cor</label>
        <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor do paciente">
        {{ $errors->first('cor') }}
      </div>


      <div class="mb-3">
        <label for="estado_civil" class="form-label">Estado Civil</label>
        <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="Estado Civil do Paciente">
        {{ $errors->first('estado_civil') }}
      </div>

      <div class="mb-3">
        <label for="profissao" class="form-label">Profissao</label>
        <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão do paciente">
        {{ $errors->first('profissao') }}
      </div>

      <div class="mb-3">
        <label for="nacionalidade" class="form-label">Nacionalidade</label>
        <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade do paciente">
        {{ $errors->first('nacionalidade') }}
      </div>

      <div class="mb-3">
        <label for="naturalidade" class="form-label">Naturalidade</label>
        <input type="text" class="form-control" id="naturalidade" name="naturalidade" placeholder="Naturalidade do paciente">
        {{ $errors->first('naturalidade') }}
      </div>

      <div class="mb-3">
        <label for="procedencia" class="form-label">Procedencia</label>
        <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="Procedencia">
        {{ $errors->first('procedencia') }}
      </div>

      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do paciente">
        {{ $errors->first('endereco') }}
      </div>
      <button type="submit" class="btn btn-success">Criar ficha</button>

    </form>
  </div>

@endsection
