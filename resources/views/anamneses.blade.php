@extends('master')

@section('content')

@if (auth()->check()) <!-- Verifica se o usuário está autenticado -->
    <h2 class="text-center" style="font-family: 'Dancing Script', cursive; font-size: 2rem; font-weight: normal; margin-top: 20px;">Listagem de fichas de Anamneses</h2>

    <!-- Componente de busca estilizado com espaçamento -->
    <form class="d-flex align-items-center p-2 bg-primary rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <!-- Input de busca com margem direita -->
        <input 
            class="form-control border-0 shadow-none rounded-start me-2" 
            type="search" 
            placeholder="Digite sua busca..." 
            name="s" 
            aria-label="Search" 
            style="background-color: #f8f9fa;"
        >
        
        <!-- Botão de busca -->
        <button 
            class="btn btn-light px-4 text-primary fw-bold rounded-end shadow-sm" 
            type="submit">
            Buscar
        </button>
    </form>




    <hr>



    <div class="row">
        @forelse ($anamneses as $anamnese)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <h4 class="card-header">
                        <a style="text-decoration: none" href="{{ route('anamnese.show', $anamnese->id) }}">{{ $anamnese->nome }}</a>
                        <br>
                        <a style="text-decoration: none" href="">Nrº do protocolo: {{ $anamnese->id }}</a>
                    </h4>

                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <a class="btn btn-info btn-sm mb-2 d-flex align-items-center" href="{{ route('anamnese.edit', $anamnese->id) }}">
                                <i class="bi bi-pencil me-2"></i> Editar ficha
                            </a>
                            <a class="btn btn-info btn-sm mb-2 d-flex align-items-center" href="{{ route('anamnese.show', $anamnese->id) }}">
                                <i class="bi bi-file-earmark-text me-2"></i> Ficha Completa
                            </a>
                            <a class="btn btn-success btn-sm mb-2 d-flex align-items-center" href="{{ route('exame.create', $anamnese->id) }}">
                                <i class="bi bi-plus-circle me-2"></i> Criar diagnóstico
                            </a>

                            {{-- Botão para abrir a modal de confirmação --}}
                            <button class="btn btn-danger btn-sm mb-2 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $anamnese->id }}">
                                <i class="bi bi-trash me-2"></i> Deletar Ficha
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal de confirmação para deletar ficha --}}
            <div class="modal fade" id="deleteModal-{{ $anamnese->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja <strong>DELETAR</strong> a ficha de anamnese <strong>{{ $anamnese->nome }}</strong> com protocolo nº {{ $anamnese->id }}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary d-flex align-items-center" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i> Cancelar
                            </button>
                            <form action="{{ route('anamnese.destroy', $anamnese->id) }}" method="post">
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
        @empty
            <!-- Caso não haja nenhum anamnese -->
            <div class="col-12 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nenhum post encontrado</h4>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    {{ $anamneses->appends(['s' => request()->query('s')])->links() }}

@else
    <!-- Se o usuário não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Você precisa estar logado com um usuário autenticado para acessar essa tela</h4>
        </div>
    </div>
@endif

@endsection
