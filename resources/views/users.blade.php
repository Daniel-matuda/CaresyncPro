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

                  {{-- Botão de deletar somente para usuários autenticados --}}
                  <form action="{{ route('user.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm mb-2" type="submit">Deletar Usuário</button>
                  </form>
                @endauth

                {{-- Exibir informações públicas (Exemplo: número de posts ou outro dado) --}}
                {{-- <small>Criou {{ $user->posts->count() }} Aulas </small> --}}
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
