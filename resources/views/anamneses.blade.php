@extends('master')

@section('content')

  <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Listagem de fichas de Anamneses</h2>

  <hr>

  <div class="row">
    @foreach ($anamneses as $anamnese)
      <div class="col-md-3 mb-3">
        <div class="card">
          <h4 class="card-header">
            <a style="text-decoration: none" href="">{{ $anamnese->nome}}</a>
            <br>
            <a style="text-decoration: none" href="">Nrº do protocolo: {{ $anamnese->id}}</a>
          </h4>

          <div class="card-body">
            <div class="d-flex flex-column align-items-center">
              <a class="btn btn-info btn-sm mb-2" href="{{ route('anamnese.edit', $anamnese->id) }}" >Editar ficha</a>
              <form action="{{ route('anamnese.destroy', $anamnese->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm mb-2" type="submit">Deletar Ficha</button>
              </form>

              {{-- <small>Criou {{ $user->posts->count() }} Aulas </small> --}}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{ $anamneses->links() }}

@endsection