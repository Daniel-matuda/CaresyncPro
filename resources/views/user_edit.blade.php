@extends('master')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Atualizar o Usuário</h2>

    @if (session()->has('updated_success'))
    <x-alert key="success" :message="session()->get('updated_success')"/>
    @elseif (session()->has('error'))
    <x-alert key="danger" :message="session()->get('updated_error')"/>
    @endif

    <form action="{{ route('user.update', $user->id) }}" method="post">
      @csrf
      @method('put')

      <div class="mb-3">
        <label for="firstName" class="form-label">Primeiro nome</label>
        <input type="text" class="form-control" id="firstName" name="firstName" name="firstName" placeholder="Digite seu primeiro nome" value="{{ $user->firstName }}">
        {{ $errors->first('firstName') }}
      </div>
      
      <div class="mb-3">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" name="lastName" name="lastName" placeholder="Digite seu sobrenome" value="{{ $user->lastName }}">
        {{ $errors->first('lastName') }}
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" name="email" placeholder="Digite seu email" value="{{ $user->email }}">
        {{ $errors->first('email') }}
      </div>

      <button type="submit" class="btn btn-success">Atualizar</button>

    </form>
  </div>

@endsection
