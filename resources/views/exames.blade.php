@extends('master')

@section('content')

@if (auth()->check() && auth()->user()->role === 'medic') 
    <!-- Verifica se o usuário está autenticado e se é médico -->
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Gerenciar exames</h2>
    <hr>

    <div class="row">
        @foreach ($exames as $exame)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <h4 class="card-header">
                        <br>
                        <a>Exame médico</a>
                        <a style="text-decoration: none" href="">Nrº do protocolo: {{ $exame->id }}</a>
                    </h4>

                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            {{-- Botão de editar --}}
                            <a class="btn btn-info btn-sm mb-2 d-flex align-items-center" href="{{ route('exame.edit', $exame->id) }}">
                                <i class="bi bi-pencil me-2"></i> Editar exame
                            </a>

                            {{-- Botão de ver resultado do exame --}}
                            <a class="btn btn-info btn-sm mb-2 d-flex align-items-center" href="{{ route('exame.show', $exame->id) }}">
                                <i class="bi bi-file-earmark-text me-2"></i> Resultado do exame
                            </a>

                            {{-- Botão para abrir a modal de confirmação --}}
                            <button class="btn btn-danger btn-sm mb-2 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $exame->id }}">
                                <i class="bi bi-trash me-2"></i> Deletar Exame médico
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal de confirmação para deletar exame --}}
            <div class="modal fade" id="deleteModal-{{ $exame->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja <strong>DELETAR</strong> o exame médico com protocolo nº {{ $exame->id }}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary d-flex align-items-center" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i> Cancelar
                            </button>
                            <form action="{{ route('exame.destroy', $exame->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger d-flex align-items-center">
                                    <i class="bi bi-trash me-2"></i> Deletar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $exames->links() }}
@else
    <!-- Se o usuário não estiver autenticado ou não for médico -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Você precisa estar logado como médico para acessar essa tela</h4>
        </div>
    </div>
@endif

@endsection
