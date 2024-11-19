@extends('master')

@section('content')

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
              <a class="btn btn-info btn-sm mb-2" href="{{ route('exame.edit', $exame->id) }}">Editar exame</a>
              <a class="btn btn-info btn-sm mb-2" href="{{ route('exame.show', $exame->id) }}">Resultado do exame</a>
              <form action="{{ route('exame.destroy', $exame->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm mb-2" type="submit">Deletar Exame médico</button>
              </form>

              {{-- <small>Criou {{ $user->posts->count() }} Aulas </small> --}}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{ $exames->links() }}

@endsection
