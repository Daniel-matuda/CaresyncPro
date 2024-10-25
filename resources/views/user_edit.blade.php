@extends('master')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Atualizar Usuário</h2>

    @if (session()->has('updated_success'))
        <x-alert key="success" :message="session()->get('updated_success')"/>
    @elseif (session()->has('updated_error'))
        <x-alert key="danger" :message="session()->get('updated_error')"/>
    @endif

    <!-- Card para Atualizar Dados do Usuário -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">Atualizar Informações do Usuário</div>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Primeiro Nome</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Primeiro Nome" value="{{ $user->firstName }}">
                        {{ $errors->first('firstName') }}
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Sobrenome" value="{{ $user->lastName }}">
                        {{ $errors->first('lastName') }}
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                    {{ $errors->first('email') }}
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{ $user->nascimento }}">
                        {{ $errors->first('nascimento') }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="">Selecione</option>
                            <option value="masculino" {{ $user->sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="feminino" {{ $user->sexo == 'feminino' ? 'selected' : '' }}>Feminino</option>
                            <option value="outro" {{ $user->sexo == 'outro' ? 'selected' : '' }}>Outro</option>
                        </select>
                        {{ $errors->first('sexo') }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="{{ $user->endereco }}">
                        {{ $errors->first('endereco') }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="{{ $user->telefone }}">
                        {{ $errors->first('telefone') }}
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <!-- Card para Atualizar Senha -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-secondary text-white">Atualizar Senha</div>
        <div class="card-body">
            @if (session()->has('password_success'))
                <x-alert key="success" :message="session()->get('password_success')"/>
            @elseif (session()->has('password_error'))
                <x-alert key="danger" :message="session()->get('password_error')"/>
            @endif

            <form action="{{ route('password.update', $user->id) }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="password" class="form-label">Nova Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite a nova senha">
                    {{ $errors->first('password') }}
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme a nova senha">
                    {{ $errors->first('password_confirmation') }}
                </div>

                <button type="submit" class="btn btn-secondary w-100">Atualizar Senha</button>
            </form>
        </div>
    </div>
</div>

@endsection
