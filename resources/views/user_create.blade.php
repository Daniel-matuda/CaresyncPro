@extends('master')

@section('content')

<div class="container mt-5">
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Cadastrar um usuário</h2>

    <hr>

    @if (session()->has('success'))
        <x-alert key="success" :message="session()->get('success')"/>
    @elseif (session()->has('error'))
        <x-alert key="danger" :message="session()->get('error')"/>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">Informações do Usuário</div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Primeiro Nome</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Primeiro Nome">
                        {{ $errors->first('firstName') }}
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Sobrenome">
                        {{ $errors->first('lastName') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                        {{ $errors->first('email') }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="nascimento" name="nascimento">
                        {{ $errors->first('nascimento') }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="">Selecione</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                        {{ $errors->first('sexo') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço">
                        {{ $errors->first('endereco') }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
                        {{ $errors->first('telefone') }}
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Criar Usuário</button>
            </form>
        </div>
    </div>
</div>

@endsection
