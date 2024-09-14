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
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Digite seu primeiro nome" value="{{ $user->firstName }}">
        {{ $errors->first('firstName') }}
      </div>
      
      <div class="mb-3">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Digite seu sobrenome" value="{{ $user->lastName }}">
        {{ $errors->first('lastName') }}
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="{{ $user->email }}">
        {{ $errors->first('email') }}
      </div>

      <button type="submit" class="btn btn-success">Atualizar</button>

    </form>

    <hr>

    <h2 class="mb-4">Atualizar a senha</h2>

    @if (session()->has('password_success'))
    <x-alert key="success" :message="session()->get('password_success')"/>
    @elseif (session()->has('password_error'))
    <x-alert key="danger" :message="session()->get('password_error')"/>
    @endif

    <form action="{{ route('password.update', $user->id) }}" method="post">
      @csrf
      @method('put')

      <div class="mb-3">
        <label for="firstName" class="form-label">Senha</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        {{ $errors->first('password') }}
      </div>
      
      <div class="mb-3">
        <label for="lastName" class="form-label">Confirme a senha</label>
        <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha">
        {{ $errors->first('password_confirmation') }}
      </div>
      
      <button type="submit" class="btn btn-success">Atualizar senha</button>

    </form>



  </div>

@endsection
