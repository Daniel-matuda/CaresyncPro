@extends('master')

@section('content')

<div class="container mt-5">
    @if (auth()->check() && auth()->user()->role == 'medic') <!-- Verifica se o usuário está autenticado e se é um médico -->
        <h2 class="mb-4">Criar Exame</h2>

        @if (session()->has('success'))
            <x-alert key="success" :message="session()->get('success')"/>
        @elseif (session()->has('error'))
            <x-alert key="danger" :message="session()->get('error')"/>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">Informações do Exame</div>
            <div class="card-body">
                <form action="{{ route('exame.store') }}" method="post">
                    @csrf

                    <!-- Collapse for General Data -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#generalData" role="button" aria-expanded="false" aria-controls="generalData">
                            Dados Gerais
                        </a>
                        <div class="collapse mt-3" id="generalData">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="QD" class="form-label">QD</label>
                                    <textarea class="form-control" id="QD" name="QD" rows="2"></textarea>
                                    {{ $errors->first('QD') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="HMA" class="form-label">HMA</label>
                                    <textarea class="form-control" id="HMA" name="HMA" rows="2"></textarea>
                                    {{ $errors->first('HMA') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="AP" class="form-label">AP</label>
                                    <textarea class="form-control" id="AP" name="AP" rows="2"></textarea>
                                    {{ $errors->first('AP') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="AF" class="form-label">AF</label>
                                    <textarea class="form-control" id="AF" name="AF" rows="2"></textarea>
                                    {{ $errors->first('AF') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapse for IDA Section -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#idaSection" role="button" aria-expanded="false" aria-controls="idaSection">
                            IDA (Informações Detalhadas por Área)
                        </a>
                        <div class="collapse mt-3" id="idaSection">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_pf" class="form-label">IDA - Pulmão e Fígado</label>
                                    <textarea class="form-control" id="IDA_pf" name="IDA_pf" rows="2"></textarea>
                                    {{ $errors->first('IDA_pf') }}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="IDA_cabeca" class="form-label">IDA - Cabeça</label>
                                    <textarea class="form-control" id="IDA_cabeca" name="IDA_cabeca" rows="2"></textarea>
                                    {{ $errors->first('IDA_cabeca') }}
                                </div>
                            </div>
                            <!-- Add more IDA fields here as needed -->
                        </div>
                    </div>

                    <!-- Collapse for Exame Físico Geral -->
                    <div class="mb-3">
                        <a class="btn btn-secondary w-100" data-bs-toggle="collapse" href="#efgSection" role="button" aria-expanded="false" aria-controls="efgSection">
                            Exame Físico Geral (EFG)
                        </a>
                        <div class="collapse mt-3" id="efgSection">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_pele" class="form-label">Pele</label>
                                    <textarea class="form-control" id="EFG_pele" name="EFG_pele" rows="2"></textarea>
                                    {{ $errors->first('EFG_pele') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_anexos" class="form-label">Anexos</label>
                                    <textarea class="form-control" id="EFG_anexos" name="EFG_anexos" rows="2"></textarea>
                                    {{ $errors->first('EFG_anexos') }}
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EFG_subcutaneo" class="form-label">Subcutâneo</label>
                                    <textarea class="form-control" id="EFG_subcutaneo" name="EFG_subcutaneo" rows="2"></textarea>
                                    {{ $errors->first('EFG_subcutaneo') }}
                                </div>
                            </div>
                            <!-- Add more EFG fields here as needed -->
                        </div>
                    </div>

                    <!-- Additional Collapses for Other Sections -->
                    <!-- Repeat the structure above for other sections like EFE, EFE_hd, etc. -->

                    <button type="submit" class="btn btn-primary w-100">Criar Exame</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <!-- Se o usuário não for médico ou não estiver autenticado -->
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h4 class="card-title text-center">Somente um médico pode iniciar um exame médico</h4>
        </div>
    </div>
    @endif
</div>

@endsection
