@extends('master')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Atualizar ficha de Exame</h2>

    @if (session()->has('updated_success'))
        <x-alert key="success" :message="session()->get('updated_success')"/>
    @elseif (session()->has('error'))
        <x-alert key="danger" :message="session()->get('updated_error')"/>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">Informações de Atualização do Exame</div>
        <div class="card-body">
            <form action="{{ route('exame.update', $exame->id) }}" method="post">
                @csrf
                @method('put')

                <!-- Campos de entrada dinâmicos -->
                <div class="row">
                    @foreach([
                        'QD' => 'Queixa Principal',
                        'HMA' => 'História da Moléstia Atual',
                        'AP' => 'Antecedentes Pessoais',
                        'AF' => 'Antecedentes Familiares',
                        'IDA' => 'Inspeção da IDA',
                        'IDA_pf' => 'Pele e Faneras',
                        'IDA_cabeca' => 'Cabeça',
                        'IDA_olhos' => 'Olhos',
                        'IDA_nariz' => 'Nariz',
                        'IDA_bg' => 'Boca e Garganta',
                        'IDA_acr' => 'Aparelho Circulatório',
                        'IDA_ad' => 'Aparelho Digestivo',
                        'IDA_gu' => 'Aparelho Genitourinário',
                        'IDA_slh' => 'Sistema Linfático e Hematológico',
                        'IDA_sev' => 'Sistema Endócrino e Vasos',
                        'IDA_sn' => 'Sistema Nervoso',
                        'IDA_al' => 'Aparelho Locomotor',
                        'IDA_qe' => 'Quadro Especial',
                        'EFG_afg' => 'Avaliação Física Geral',
                        'EFG_pele' => 'Pele',
                        'EFG_anexos' => 'Anexos',
                        'EFG_subcutaneo' => 'Tecido Subcutâneo',
                        'EFG_gl' => 'Gânglios Linfáticos',
                        'EFG_mucosas' => 'Mucosas',
                        'EFG_osteomuscular' => 'Sistema Osteomuscular',
                        'EFG_peso' => 'Peso',
                        'EFG_altura' => 'Altura',
                        'EFG_PA' => 'Pressão Arterial',
                        'EFG_FC' => 'Frequência Cardíaca',
                        'EFG_FR' => 'Frequência Respiratória',
                        'EFG_T' => 'Temperatura',
                        'Aluno' => 'Aluno Responsável',
                        'Codigo' => 'Código do Exame',
                        'Professor' => 'Professor Responsável',
                    ] as $field => $label)
                        <div class="col-md-4 mb-3">
                            <label for="{{ $field }}" class="form-label">{{ $label }}</label>
                            <input type="text" class="form-control" id="{{ $field }}" name="{{ $field }}" value="{{ $exame->$field }}">
                            {{ $errors->first($field) }}
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary w-100">Atualizar Ficha de Exame</button>
            </form>
        </div>
    </div>
</div>

@endsection
