@extends('master')

@section('content')

@if (auth()->check()) <!-- Verifica se o usuário está autenticado -->
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Listagem de usuários</h2>
    <hr>

    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <h4 class="card-header">
                        <a style="text-decoration: none" href="#">{{ $user->fullName }}</a>
                    </h4>

                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            @auth
                                {{-- Botão de editar somente para usuários autenticados --}}
                                <a class="btn btn-info btn-sm mb-2" href="{{ route('user.edit', $user->id) }}">Editar Usuário</a>

                                {{-- Botão para abrir a modal de confirmação --}}
                                <button class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $user->id }}">
                                    Deletar Usuário
                                </button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal de confirmação para deletar usuário --}}
            <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja <strong>DELETAR</strong> o usuário <strong>{{ $user->fullName }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    Deletar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $users->links() }}

@else
    <!-- Se o usuário não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Você precisa estar logado para ver a listagem de usuários do sistema</h4>
        </div>
    </div>
@endif

@endsection
