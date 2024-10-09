@extends('master')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Atualizar ficha de Anamnese</h2>

    @if (session()->has('updated_success'))
    <x-alert key="success" :message="session()->get('updated_success')"/>
    @elseif (session()->has('error'))
    <x-alert key="danger" :message="session()->get('updated_error')"/>
    @endif

    <form action="{{ route('anamnese.update', $anamnese->id) }}" method="post">
      @csrf
      @method('put')

      <div class="mb-3">
        <label for="local_do_atendimento" class="form-label">Local do atendimento</label>
        <input type="text" class="form-control" id="local_do_atendimento" name="local_do_atendimento" value="{{ $anamnese->local_do_atendimento }}">
        {{ $errors->first('local_do_atendimento') }}
      </div>
      
      <div class="mb-3">
        <label for="nome" class="form-label">Nome do paciente</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $anamnese->nome }}">
        {{ $errors->first('nome') }}
      </div>

      <div class="mb-3">
        <label for="data" class="form-label">Data</label>
        <input type="text" class="form-control" id="data" name="data" value="{{ $anamnese->data }}">
        {{ $errors->first('data') }}
      </div>
      
      <div class="mb-3">
        <label for="cor" class="form-label">Cor</label>
        <input type="text" class="form-control" id="cor" name="cor" value="{{ $anamnese->cor }}">
        {{ $errors->first('cor') }}
      </div>


      <div class="mb-3">
        <label for="estado_civil" class="form-label">Estado Civil</label>
        <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ $anamnese->estado_civil }}">
        {{ $errors->first('estado_civil') }}
      </div>

      <div class="mb-3">
        <label for="profissao" class="form-label">Profissao</label>
        <input type="text" class="form-control" id="profissao" name="profissao" value="{{ $anamnese->profissao }}">
        {{ $errors->first('profissao') }}
      </div>

      <div class="mb-3">
        <label for="nacionalidade" class="form-label">Nacionalidade</label>
        <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" value="{{ $anamnese->nacionalidade }}">
        {{ $errors->first('nacionalidade') }}
      </div>

      <div class="mb-3">
        <label for="naturalidade" class="form-label">Naturalidade</label>
        <input type="text" class="form-control" id="naturalidade" name="naturalidade" value="{{ $anamnese->naturalidade }}">
        {{ $errors->first('naturalidade') }}
      </div>

      <div class="mb-3">
        <label for="procedencia" class="form-label">Procedencia</label>
        <input type="text" class="form-control" id="procedencia" name="procedencia" value="{{ $anamnese->procedencia }}">
        {{ $errors->first('procedencia') }}
      </div>

      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $anamnese->endereco }}">
        {{ $errors->first('endereco') }}
      </div>

      <button type="submit" class="btn btn-success">Atualizar ficha</button>

    </form>

@endsection
