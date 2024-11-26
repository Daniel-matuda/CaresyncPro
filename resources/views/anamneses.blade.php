@extends('master')

@section('content')

  @if (auth()->check()) <!-- Verifica se o usuário está autenticado -->
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Listagem de fichas de Anamneses</h2>
    <hr>

    <div class="row">
      @foreach ($anamneses as $anamnese)
        <div class="col-md-3 mb-3">
          <div class="card">
            <h4 class="card-header">
              <a style="text-decoration: none" href="{{ route('anamnese.show', $anamnese->id) }}">{{ $anamnese->nome }}</a>
              <br>
              <a style="text-decoration: none" href="">Nrº do protocolo: {{ $anamnese->id }}</a>
            </h4>

            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <a class="btn btn-info btn-sm mb-2" href="{{ route('anamnese.edit', $anamnese->id) }}">Editar ficha</a>
                <a class="btn btn-info btn-sm mb-2" href="{{ route('anamnese.show', $anamnese->id) }}">Ficha Completa</a>
                <a class="btn btn-success btn-sm mb-2" href="{{ route('anamnese.show', $anamnese->id) }}">Criar diagnóstico</a>
                <form action="{{ route('anamnese.destroy', $anamnese->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-sm mb-2" type="submit">Deletar Ficha</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{ $anamneses->links() }}

  @else
    <!-- Se o usuário não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h4 class="card-title text-center">Você precisa estar logado com um usuário autenticado para acessar essa tela</h4>
      </div>
    </div>
  @endif

@endsection
