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
                        'EFE_sc_cranio' => 'Crânio',
                        'EFE_sc_olhos' => 'Olhos',
                        'EFE_sc_nariz' => 'Nariz',
                        'EFE_sc_dfm' => 'DFM',
                        'EFE_sc_boca' => 'Boca',
                        'EFE_sc_orofaringe' => 'Orofaringe',
                        'EFE_sc_pescoco' => 'Pescoço',
                        'EFE_ar_ie' => 'Inspeção Externa',
                        'EFE_ar_id' => 'Inspeção Direita',
                        'EFE_ar_palpacao' => 'Palpação',
                        'EFE_ar_percussao' => 'Percussão',
                        'EFE_ar_ausculta' => 'Ausculta',
                        'EFE_ac_inspecao' => 'Inspeção',
                        'EFE_ac_palpacao' => 'Palpação',
                        'EFE_ac_ausculta' => 'Ausculta',
                        'EFE_ac_arterias' => 'Artérias',
                        'EFE_abdome_inspecao' => 'Inspeção Abdominal',
                        'EFE_abdome_ausculta' => 'Ausculta Abdominal',
                        'EFE_abdome_percussao' => 'Percussão Abdominal',
                        'EFE_abdome_figado' => 'Fígado',
                        'EFE_abdome_baco' => 'Baço',
                        'EFE_abdome_rins' => 'Rins',
                        'EFE_abdome_ps' => 'Pontos Sensíveis',
                        'EFE_abdome_pd' => 'Pontos Dolorosos',
                        'EFE_agu_ar' => 'Aparelho Respiratório',
                        'EFE_agu_ge' => 'Aparelho Geniturinário',
                        'EFE_cv_inspecao' => 'Inspeção CV',
                        'EFE_cv_pmc' => 'PMC',
                        'EFE_cv_membros' => 'Membros Inferiores',
                        'EFE_sn_ep' => 'Exame Psicomotor',
                        'EFE_sn_mv-fm-cm' => 'Movimento Voluntário',
                        'EFE_sn_sensibilidade' => 'Sensibilidade',
                        'EFE_hd1' => 'Hipótese Diagnóstica 1',
                        'EFE_hd2' => 'Hipótese Diagnóstica 2',
                        'EFE_hd3' => 'Hipótese Diagnóstica 3',
                        'EFE_hd4' => 'Hipótese Diagnóstica 4',
                        'EFE_hd5' => 'Hipótese Diagnóstica 5',
                        'EFE_hd6' => 'Hipótese Diagnóstica 6',
                        'EFE_hd7' => 'Hipótese Diagnóstica 7',
                        'EFE_hd8' => 'Hipótese Diagnóstica 8',
                        'EFE_hd9' => 'Hipótese Diagnóstica 9',
                        'EFE_hd10' => 'Hipótese Diagnóstica 10',
                        'EFE_sec_bioquimicos' => 'Bioquímicos',
                        'EFE_sec_microbiologicos' => 'Microbiológicos',
                        'EFE_sec_di' => 'Diagnóstico Imagem',
                        'EFE_ct_nm' => 'Conduta Não Medicamentosa',
                        'EFE_ct_medicamentosa' => 'Conduta Medicamentosa',
                        'EFE_ct_procedimentos' => 'Procedimentos',
                        'EFE_ct_cirurgia' => 'Cirurgia',
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
