@extends('master')

@section('content')

  <div class="container mt-5">
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-bottom: 30px;">Login</h2>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ route('login.store') }}" method="post" class="p-4 border rounded shadow-sm bg-light">

          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            {{ $errors->first('email') }}
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
            {{ $errors->first('password') }}
          </div>

          <input type="checkbox" name="remember" id=""> Lembrar

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-block">Fazer Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection
