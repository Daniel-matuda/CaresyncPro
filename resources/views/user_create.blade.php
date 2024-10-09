@extends('master')

@section('content')

  <div class="container mt-5">
    <h2 class="mb-4">Crie um Usuário</h2>

    @if (session()->has('success'))
    <x-alert key="success" :message="session()->get('success')"/>
    @elseif (session()->has('error'))
    <x-alert key="danger" :message="session()->get('error')"/>
    @endif

    <form action="{{ route('user.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="firstName" class="form-label">Primeiro nome</label>
        <input type="text" class="form-control" id="firstName" name="firstName"placeholder="Digite seu primeiro nome">
        {{ $errors->first('firstName') }}
      </div>
      
      <div class="mb-3">
        <label for="lastName" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Digite seu sobrenome">
        {{ $errors->first('lastName') }}
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
        {{ $errors->first('email') }}
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        {{ $errors->first('password') }}
      </div>

      <button type="submit" class="btn btn-success">Criar</button>

    </form>
  </div>

@endsection
