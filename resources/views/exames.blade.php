@extends('master')

@section('content')

  @if (auth()->check()) <!-- Verifica se o usuário está autenticado -->
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Gerenciar exames</h2>
    <hr>

    <div class="row">
      @foreach ($exames as $exame)
        <div class="col-md-3 mb-3">
          <div class="card">
            <h4 class="card-header">
              <br>
              <a style="text-decoration: none" href="">Nrº do protocolo: {{ $exame->id }}</a>
            </h4>

            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                @auth
                  {{-- Botão de editar somente para usuários autenticados --}}
                  <a class="btn btn-info btn-sm mb-2" href="{{ route('exame.edit', $exame->id) }}">Editar exame</a>

                  {{-- Botão de ver resultado do exame --}}
                  <a class="btn btn-info btn-sm mb-2" href="{{ route('exame.show', $exame->id) }}">Resultado do exame</a>

                  {{-- Botão de deletar exame somente para usuários autenticados --}}
                  <form action="{{ route('exame.destroy', $exame->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm mb-2" type="submit">Deletar Exame médico</button>
                  </form>
                @endauth

                {{-- Exibir informações públicas se necessário --}}
                {{-- <small>Criou {{ $user->posts->count() }} Aulas </small> --}}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{ $exames->links() }}

  @else
    <!-- Se o usuário não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h4 class="card-title text-center">Você não tem permissão para acessar essa tela</h4>
      </div>
    </div>
  @endif

@endsection
